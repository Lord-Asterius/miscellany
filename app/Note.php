<?php

namespace App;

use App\Traits\CampaignTrait;
use App\Traits\VisibleTrait;

class Note extends MiscModel
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'type',
        'is_private',
    ];

    /**
     * Searchable fields
     * @var array
     */
    protected $searchableColumns = ['name', 'type'];

    /**
     * Traits
     */
    use CampaignTrait;
    use VisibleTrait;


    /**
     * Get a short history/description for the dashboard
     * @param int $limit
     * @return string
     */
    public function shortHistory($limit = 150)
    {
        $pureHistory = strip_tags($this->description);
        if (!empty($pureHistory)) {
            if (strlen($pureHistory) > $limit) {
                return substr($pureHistory, 0, $limit) . '...';
            }
        }
        return $pureHistory;
    }
}
