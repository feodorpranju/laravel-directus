<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directus\Extension
 *
 * @property string $name
 * @property bool $enabled
 * @method static \Illuminate\Database\Eloquent\Builder|Extension newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension query()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereName($value)
 * @mixin \Eloquent
 */
class Extension extends Model
{
    use HasFactory;

    protected $table = 'directus_extensions';
}
