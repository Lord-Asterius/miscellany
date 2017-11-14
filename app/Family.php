<?php

namespace App;

use App\Traits\CampaignTrait;
use App\Traits\VisibleTrait;

class Family extends MiscModel
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'history',
        'image',
        'location_id',
        'is_private'
    ];

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns = ['name'];

    /**
     * Traits
     */
    use CampaignTrait;
    use VisibleTrait;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany('App\Character', 'family_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relationships()
    {
        return $this->hasMany('App\FamilyRelation', 'first_id', 'id');
    }

    /**
     * Get a short history/description for the dashboard
     * @param int $limit
     * @return string
     */
    public function shortHistory($limit = 150)
    {
        $pureHistory = strip_tags($this->history);
        if (!empty($pureHistory)) {
            if (strlen($pureHistory) > $limit) {
                return substr($pureHistory, 0, $limit) . '...';
            }
        }
        return $pureHistory;
    }
}
