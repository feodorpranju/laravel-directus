<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\Notification
 *
 * @property int $id
 * @property string|null $timestamp
 * @property string|null $status
 * @property string $recipient
 * @property string|null $sender
 * @property string $subject
 * @property string|null $message
 * @property string|null $collection
 * @property string|null $item
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCollection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereRecipient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTimestamp($value)
 * @mixin \Eloquent
 */
class Notification extends Model
{
    use HasFactory;

    protected $table = 'directus_notifications';

    /**
     * @return BelongsTo
     */
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender');
    }

    /**
     * @return BelongsTo
     */
    public function recipient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recipient');
    }
}
