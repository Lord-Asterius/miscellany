<?php

namespace App\Http\Controllers;

use App\Facades\CampaignLocalization;
use App\Http\Requests\StoreEntityNote;
use App\Models\EntityNote;
use App\Traits\GuestAuthTrait;
use Illuminate\Support\Facades\Auth;
use App\Models\Entity;

class EntityNoteController extends Controller
{
    use GuestAuthTrait;

    /**
     * @var string
     */
    protected $view = '';

    /**
     * @var string
     */
    protected $route = 'entity_notes';

    /**
     * Crud view path
     * @var string
     */
    protected $crudView = 'notes';

    /**
     * @var string
     */
    protected $model = \App\Models\EntityNote::class;

    /**
     * @param Entity $entity
     * @return \Illuminate\Http\Response
     */
    public function index(Entity $entity)
    {
        $this->authorize('browse', [$entity->child]);

        $notes = $entity->notes()->paginate();
        $name = $this->view;
        $route = $entity->type() . $this->route;
        $parentRoute = $entity->pluralType();

        return view('cruds.notes.index', compact(
            'notes',
            'name',
            'route',
            'entity',
            'parentRoute'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Entity $entity, EntityNote $entityNote)
    {
        $this->authorize('entity-note', [$entity->child, 'add']);

        $name = $entity->pluralType() . '.notes' . $this->view;
        $route = 'entities.' . $this->route;
        $parentRoute = $entity->pluralType();

        return view('entities.pages.entity-notes.create', compact(
            'entityNote',
            'name',
            'route',
            'entity',
            'parentRoute',
        ));
    }

    /**
     * @param Entity $entity
     * @param EntityNote $entityNote
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Entity $entity, EntityNote $entityNote)
    {
        // Policies will always fail if they can't resolve the user.
        if (Auth::check()) {
            $this->authorize('view', $entity->child);
        } else {
            if (empty($entity->child)) {
                abort(404);
            }
            $this->authorizeEntityForGuest('read', $entity->child);
        }

        $ajax = request()->ajax();

        return view('cruds.notes.' . ($ajax ? '_' : null) . 'show', compact(
            'entityNote',
            'entity',
            'ajax'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntityNote $request, Entity $entity)
    {
        $this->authorize('entity-note', [$entity->child, 'add']);

        // For ajax requests, send back that the validation succeeded, so we can really send the form to be saved.
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        $note = new EntityNote();
        $note->entity_id = $entity->id;
        $note = $note->create($request->all());

        if ($request->has('submit-new')) {
            $route = route('entities.entity_notes.create', [$entity]);
            return response()->redirectTo($route);
        } elseif ($request->has('submit-update')) {
            $route = route('entities.entity_notes.edit', [$entity, $note]);
            return response()->redirectTo($route);
        }

        return redirect()
            ->route($entity->pluralType() . '.show', [$entity->child->id])
            ->with('success', trans('entities/notes.create.success', [
                'name' => $note->name, 'entity' => $entity->child->name
            ]));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Entity $entity, EntityNote $entityNote)
    {
        $this->authorize('entity-note', [$entity->child, 'edit', $entityNote]);

        $name = $entity->pluralType() . '.notes' . $this->view;
        $route = 'entities.' . $this->route;
        $parentRoute = $entity->pluralType();
        $model = $entityNote;
        $from = request()->get('from');

        return view('entities.pages.entity-notes.edit', compact(
            'entity',
            'model',
            'name',
            'route',
            'parentRoute',
            'from'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEntityNote $request, Entity $entity, EntityNote $entityNote)
    {
        $this->authorize('entity-note', [$entity->child, 'edit', $entityNote]);

        // For ajax requests, send back that the validation succeeded, so we can really send the form to be saved.
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        $entityNote->update($request->all());

        if ($request->has('submit-new')) {
            $route = route('entities.entity_notes.create', [$entity]);
            return response()->redirectTo($route);
        } elseif ($request->has('submit-update')) {
            $route = route('entities.entity_notes.edit', [$entity, $entityNote]);
            return response()->redirectTo($route);
        }

        if ($request->get('from') == 'main') {
            return redirect()->route($entity->pluralType() . '.show', [$entity->child->id, '#entity-note-' . $entityNote->id])
                ->with('success', trans('entities/notes.edit.success', [
                    'name' => $entityNote->name, 'entity' => $entity->name
                ]));
        }

        return redirect()->route($entity->pluralType() . '.show', [$entity->child->id])
            ->with('success', trans('entities/notes.edit.success', [
                'name' => $entityNote->name, 'entity' => $entity->name
            ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterAttribute  $characterAttribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entity $entity, EntityNote $entityNote)
    {
        $this->authorize('entity-note', [$entity->child, 'delete']);

        $entityNote->delete();

        return redirect()
            ->route($entity->pluralType() . '.show', [$entity->child->id])
            ->with('success', trans('entities/notes.destroy.success', [
                'name' => $entityNote->name, 'entity' => $entity->name
            ]));
    }
}
