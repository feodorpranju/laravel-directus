<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Version
 *
 * @property int $id
 * @property string $key
 * @property string|null $name
 * @property string $collection
 * @property string $item
 * @property string|null $hash
 * @property string|null $date_created
 * @property string|null $date_updated
 * @property string|null $user_created
 * @property string|null $user_updated
 * @method static \Illuminate\Database\Eloquent\Builder|Version newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Version newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Version query()
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereDateUpdated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereUserCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Version whereUserUpdated($value)
 * @mixin \Eloquent
 */
class Version extends Model
{
    use HasFactory;

    protected $table = 'directus_versions';

    /**
     * @return BelongsTo
     */
    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class, 'collection', 'collection');
    }

    /**
     * @return BelongsTo
     */
    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_created');
    }

    /**
     * @return BelongsTo
     */
    public function userUpdated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_updated');
    }

    /**
     * @return HasMany
     */
    public function versions(): HasMany
    {
        return $this->hasMany(Version::class, 'user_created');
    }
}
