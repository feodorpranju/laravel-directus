<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directus\Migration
 *
 * @property string $version
 * @property string $name
 * @property string|null $timestamp
 * @method static \Illuminate\Database\Eloquent\Builder|Migration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Migration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Migration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Migration whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Migration whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Migration whereVersion($value)
 * @mixin \Eloquent
 */
class Migration extends Model
{
    use HasFactory;

    protected $table = 'directus_migrations';

    protected $primaryKey = 'version';

    protected $keyType = 'string';
}
