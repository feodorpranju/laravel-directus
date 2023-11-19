<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directus\Webhook
 *
 * @property int $id
 * @property string $name
 * @property string $method
 * @property string $url
 * @property string $status
 * @property bool $data
 * @property string $actions
 * @property string $collections
 * @property mixed|null $headers
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook query()
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereActions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereCollections($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereHeaders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Webhook whereUrl($value)
 * @mixin \Eloquent
 */
class Webhook extends Model
{
    use HasFactory;

    protected $table = 'directus_webhooks';
}
