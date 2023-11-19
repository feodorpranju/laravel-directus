<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Collection
 *
 * @property string $collection
 * @property string|null $icon
 * @property string|null $note
 * @property string|null $display_template
 * @property bool $hidden
 * @property bool $singleton
 * @property mixed|null $translations
 * @property string|null $archive_field
 * @property bool $archive_app_filter
 * @property string|null $archive_value
 * @property string|null $unarchive_value
 * @property string|null $sort_field
 * @property string|null $accountability
 * @property string|null $color
 * @property mixed|null $item_duplication_fields
 * @property int|null $sort
 * @property string|null $group
 * @property string $collapse
 * @property string|null $preview_url
 * @property bool $versioning
 * @method static \Illuminate\Database\Eloquent\Builder|Collection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection query()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereAccountability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereArchiveAppFilter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereArchiveField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereArchiveValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCollapse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereDisplayTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereItemDuplicationFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection wherePreviewUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereSingleton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereSortField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereTranslations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereUnarchiveValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereVersioning($value)
 * @mixin \Eloquent
 */
class Collection extends Model
{
    use HasFactory;

    protected $table = 'directus_collections';

    protected $primaryKey = 'collection';

    protected $keyType = 'string';

    /**
     * @return HasMany
     */
    public function shares(): HasMany
    {
        return $this->hasMany(Share::class, 'collection', 'collection');
    }

    /**
     * @return HasMany
     */
    public function versions(): HasMany
    {
        return $this->hasMany(Version::class, 'collection', 'collection');
    }
}
