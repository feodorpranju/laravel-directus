<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Activity
 *
 * @property int $id
 * @property string $action
 * @property string|null $user
 * @property string $timestamp
 * @property string|null $ip
 * @property string|null $user_agent
 * @property string $collection
 * @property string $item
 * @property string|null $comment
 * @property string|null $origin
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUserAgent($value)
 * @mixin \Eloquent
 */
class Activity extends Model
{
    use HasFactory;

    protected $table = 'directus_activity';

    /**
     * @return HasMany
     */
    public function revisions(): HasMany
    {
        return $this->hasMany(Revision::class, 'activity');
    }
}
