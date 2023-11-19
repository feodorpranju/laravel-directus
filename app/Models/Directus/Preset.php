<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\Preset
 *
 * @property int $id
 * @property string|null $bookmark
 * @property string|null $user
 * @property string|null $role
 * @property string|null $collection
 * @property string|null $search
 * @property string|null $layout
 * @property mixed|null $layout_query
 * @property mixed|null $layout_options
 * @property int|null $refresh_interval
 * @property mixed|null $filter
 * @property string|null $icon
 * @property string|null $color
 * @method static \Illuminate\Database\Eloquent\Builder|Preset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Preset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Preset query()
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereBookmark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereFilter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereLayout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereLayoutOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereLayoutQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereRefreshInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereSearch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preset whereUser($value)
 * @mixin \Eloquent
 */
class Preset extends Model
{
    use HasFactory;

    protected $table = 'directus_presets';

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user');
    }
}
