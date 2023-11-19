<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Dashboard
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string|null $note
 * @property string|null $date_created
 * @property string|null $user_created
 * @property string|null $color
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dashboard whereUserCreated($value)
 * @mixin \Eloquent
 */
class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'directus_dashboards';

    /**
     * @return HasMany
     */
    public function panels(): HasMany
    {
        return $this->hasMany(Panel::class, 'dashboard');
    }

    /**
     * @return BelongsTo
     */
    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_created');
    }
}
