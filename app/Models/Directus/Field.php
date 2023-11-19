<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directus\Field
 *
 * @property int $id
 * @property string $collection
 * @property string $field
 * @property string|null $special
 * @property string|null $interface
 * @property mixed|null $options
 * @property string|null $display
 * @property mixed|null $display_options
 * @property bool $readonly
 * @property bool $hidden
 * @property int|null $sort
 * @property string|null $width
 * @property mixed|null $translations
 * @property string|null $note
 * @property mixed|null $conditions
 * @property bool|null $required
 * @property string|null $group
 * @property mixed|null $validation
 * @property string|null $validation_message
 * @method static \Illuminate\Database\Eloquent\Builder|Field newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Field newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Field query()
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereConditions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereDisplayOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereInterface($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereReadonly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereSpecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereTranslations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereValidationMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereWidth($value)
 * @mixin \Eloquent
 */
class Field extends Model
{
    use HasFactory;

    protected $table = 'directus_fields';
}
