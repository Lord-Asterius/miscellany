<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLog
 * @package App\Models
 *
 * @property int $user_id
 * @property int $type_id
 * @property string $ip
 * @property Carbon $created_at
 */
class UserLog extends Model
{
    const TYPE_LOGIN = 1;
    const TYPE_LOGOUT = 2;
    const TYPE_UPDATE = 4;
    const TYPE_SUB_NEW = 10;
    const TYPE_SUB_CANCEL = 11;
    const TYPE_SUB_UPGRADE = 12;
    const TYPE_SUB_DOWNGRADE = 13;
    const TYPE_SUB_FAIL = 15;

    const TYPE_CAMPAIGN_NEW = 20;
    const TYPE_CAMPAIGN_JOIN = 21;
    const TYPE_CAMPAIGN_LEAVE = 22;
    const TYPE_CAMPAIGN_DELETE = 23;

    /**
     * @var string
     */
    public $table = 'user_logs';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type_id',
        'ip'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function action(): string
    {
        switch ($this->type_id) {
            case self::TYPE_LOGIN:
                return 'Login';
            case self::TYPE_LOGOUT:
                return 'Logout';
            case self::TYPE_UPDATE:
                return 'Update';
            case self::TYPE_SUB_NEW:
                return 'New sub';
            case self::TYPE_SUB_DOWNGRADE:
                return 'Downgrade sub';
            case self::TYPE_SUB_UPGRADE:
                return 'Upgrade sub';
            case self::TYPE_SUB_FAIL:
                return 'Failed billing';
            case self::TYPE_SUB_CANCEL:
                return 'Cancelled sub';
            case self::TYPE_CAMPAIGN_JOIN:
                return 'Join campaign';
            case self::TYPE_CAMPAIGN_NEW:
                return 'New campaign';
            case self::TYPE_CAMPAIGN_LEAVE:
                return 'Leave campaign';
            case self::TYPE_CAMPAIGN_DELETE:
                return 'Delete campaign';
        }

        return 'unknown';
    }
}
