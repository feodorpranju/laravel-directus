<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Folder
 *
 * @property int $id
 * @property string $name
 * @property string|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Folder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder query()
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folder whereParent($value)
 * @mixin \Eloquent
 */
class Folder extends Model
{
    use HasFactory;

    protected $table = 'directus_folders';

    protected $keyType = 'string';

    /**
     * @return HasMany
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class, 'folder');
    }

    /**
     * @return HasMany
     */
    public function folders(): HasMany
    {
        return $this->hasMany(File::class, 'parent');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(File::class, 'parent');
    }
}
