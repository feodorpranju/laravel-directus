<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\Session
 *
 * @property string $token
 * @property string|null $user
 * @property string $expires
 * @property string|null $ip
 * @property string|null $user_agent
 * @property string|null $share
 * @property string|null $origin
 * @method static \Illuminate\Database\Eloquent\Builder|Session newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereShare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUserAgent($value)
 * @mixin \Eloquent
 */
class Session extends Model
{
    use HasFactory;

    protected $table = 'directus_sessions';

    protected $primaryKey = 'token';

    protected $keyType = 'string';

    /**
     * @return BelongsTo
     */
    public function share(): BelongsTo
    {
        return $this->belongsTo(Share::class, 'share');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user');
    }
}
