<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Flow
 *
 * @property int $id
 * @property string $name
 * @property string|null $icon
 * @property string|null $color
 * @property string|null $description
 * @property string $status
 * @property string|null $trigger
 * @property string|null $accountability
 * @property mixed|null $options
 * @property string|null $operation
 * @property string|null $date_created
 * @property string|null $user_created
 * @method static \Illuminate\Database\Eloquent\Builder|Flow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flow query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereAccountability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereOperation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereTrigger($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flow whereUserCreated($value)
 * @mixin \Eloquent
 */
class Flow extends Model
{
    use HasFactory;

    protected $table = 'directus_flows';

    protected $keyType = 'string';

    /**
     * @return BelongsTo
     */
    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_created');
    }

    /**
     * Trigger operation
     *
     * @return BelongsTo
     */
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class, 'operation');
    }

    /**
     * @return HasMany
     */
    public function operations(): HasMany
    {
        return $this->hasMany(Operation::class, 'flow');
    }
}
