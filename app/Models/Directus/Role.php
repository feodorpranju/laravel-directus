<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\Role
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string|null $description
 * @property string|null $ip_access
 * @property bool $enforce_tfa
 * @property bool $admin_access
 * @property bool $app_access
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereAdminAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereAppAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereEnforceTfa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereIpAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use HasFactory;

    protected $table = 'directus_roles';

    protected $keyType = 'string';

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role');
    }

    /**
     * @return HasMany
     */
    public function shares(): HasMany
    {
        return $this->hasMany(Share::class, 'role');
    }

    /**
     * @return HasMany
     */
    public function permissions(): HasMany
    {
        return $this->hasMany(Permission::class, 'role');
    }

    /**
     * @return HasMany
     */
    public function presets(): HasMany
    {
        return $this->hasMany(Preset::class, 'role');
    }
}
