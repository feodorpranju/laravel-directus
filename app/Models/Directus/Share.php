<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Share
 *
 * @property int $id
 * @property string|null $name
 * @property string $collection
 * @property string $item
 * @property string|null $role
 * @property string|null $password
 * @property string|null $user_created
 * @property string|null $date_created
 * @property string|null $date_start
 * @property string|null $date_end
 * @property int|null $times_used
 * @property int|null $max_uses
 * @method static \Illuminate\Database\Eloquent\Builder|Share newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Share newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Share query()
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereMaxUses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereTimesUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Share whereUserCreated($value)
 * @mixin \Eloquent
 */
class Share extends Model
{
    use HasFactory;

    protected $table = 'directus_shares';

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
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role');
    }

    /**
     * @return BelongsTo
     */
    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_created');
    }

    /**
     * @return HasMany
     */
    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class, 'share');
    }
}
