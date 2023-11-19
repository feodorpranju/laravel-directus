<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directus\Translation
 *
 * @property int $id
 * @property string $language
 * @property string $key
 * @property string $value
 * @method static \Illuminate\Database\Eloquent\Builder|Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation whereValue($value)
 * @mixin \Eloquent
 */
class Translation extends Model
{
    use HasFactory;

    protected $table = 'directus_translations';
}
