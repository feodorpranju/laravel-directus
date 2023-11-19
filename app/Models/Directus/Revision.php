<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Revision
 *
 * @property int $id
 * @property int $activity
 * @property string $collection
 * @property string $item
 * @property mixed|null $data
 * @property mixed|null $delta
 * @property int|null $parent
 * @property string|null $version
 * @method static \Illuminate\Database\Eloquent\Builder|Revision newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Revision newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Revision query()
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereDelta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Revision whereVersion($value)
 * @mixin \Eloquent
 */
class Revision extends Model
{
    use HasFactory;

    protected $table = 'directus_revisions';

    /**
     * @return BelongsTo
     */
    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class, 'activity');
    }

    /**
     * @return BelongsTo
     */
    public function versions(): BelongsTo
    {
        return $this->belongsTo(Version::class, 'version');
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(Revision::class, 'parent');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Revision::class, 'parent');
    }
}
