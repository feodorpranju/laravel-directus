<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directus\Relation
 *
 * @property int $id
 * @property string $many_collection
 * @property string $many_field
 * @property string|null $one_collection
 * @property string|null $one_field
 * @property string|null $one_collection_field
 * @property string|null $one_allowed_collections
 * @property string|null $junction_field
 * @property string|null $sort_field
 * @property string $one_deselect_action
 * @method static \Illuminate\Database\Eloquent\Builder|Relation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Relation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Relation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereJunctionField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereManyCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereManyField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereOneAllowedCollections($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereOneCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereOneCollectionField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereOneDeselectAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereOneField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Relation whereSortField($value)
 * @mixin \Eloquent
 */
class Relation extends Model
{
    use HasFactory;

    protected $table = 'directus_relations';
}
