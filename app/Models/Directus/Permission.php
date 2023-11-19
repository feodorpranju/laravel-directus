<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\Permission
 *
 * @property int $id
 * @property string|null $role
 * @property string $collection
 * @property string $action
 * @property mixed|null $permissions
 * @property mixed|null $validation
 * @property mixed|null $presets
 * @property string|null $fields
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission wherePresets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereValidation($value)
 * @mixin \Eloquent
 */
class Permission extends Model
{
    use HasFactory;

    protected $table = 'directus_permissions';

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role');
    }
}
