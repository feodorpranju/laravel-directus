<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\Panel
 *
 * @property int $id
 * @property string $dashboard
 * @property string|null $name
 * @property string|null $icon
 * @property string|null $color
 * @property bool $show_header
 * @property string|null $note
 * @property string $type
 * @property int $position_x
 * @property int $position_y
 * @property int $width
 * @property int $height
 * @property mixed|null $options
 * @property string|null $date_created
 * @property string|null $user_created
 * @method static \Illuminate\Database\Eloquent\Builder|Panel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Panel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Panel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereDashboard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereShowHeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereUserCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panel whereWidth($value)
 * @mixin \Eloquent
 */
class Panel extends Model
{
    use HasFactory;

    protected $table = 'directus_panels';

    /**
     * @return BelongsTo
     */
    public function dashboard(): BelongsTo
    {
        return $this->belongsTo(Dashboard::class, 'dashboard');
    }

    /**
     * @return BelongsTo
     */
    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_created');
    }
}
