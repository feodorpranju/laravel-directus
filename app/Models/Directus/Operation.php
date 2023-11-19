<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Operation
 *
 * @property int $id
 * @property string|null $name
 * @property string $key
 * @property string $type
 * @property int $position_x
 * @property int $position_y
 * @property mixed|null $options
 * @property string|null $resolve
 * @property string|null $reject
 * @property string $flow
 * @property string|null $date_created
 * @property string|null $user_created
 * @method static \Illuminate\Database\Eloquent\Builder|Operation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereFlow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereReject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereResolve($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereUserCreated($value)
 * @mixin \Eloquent
 */
class Operation extends Model
{
    use HasFactory;

    protected $table = 'directus_operations';

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
    public function flow(): BelongsTo
    {
        return $this->belongsTo(Flow::class, 'flow');
    }

    /**
     * @return BelongsTo
     */
    public function resolveChild(): BelongsTo
    {
        return $this->belongsTo(Operation::class, 'resolve');
    }

    /**
     * @return HasMany
     */
    public function resolveParent(): HasMany
    {
        return $this->hasMany(Operation::class, 'resolve');
    }

    /**
     * @return BelongsTo
     */
    public function rejectChild(): BelongsTo
    {
        return $this->belongsTo(Operation::class, 'reject');
    }

    /**
     * @return HasMany
     */
    public function rejectParent(): HasMany
    {
        return $this->hasMany(Operation::class, 'reject');
    }
}
