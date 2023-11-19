<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\File
 *
 * @property int $id
 * @property string $storage
 * @property string|null $filename_disk
 * @property string $filename_download
 * @property string|null $title
 * @property string|null $type
 * @property string|null $folder
 * @property string|null $uploaded_by
 * @property string $uploaded_on
 * @property string|null $modified_by
 * @property string $modified_on
 * @property string|null $charset
 * @property int|null $filesize
 * @property int|null $width
 * @property int|null $height
 * @property int|null $duration
 * @property string|null $embed
 * @property string|null $description
 * @property string|null $location
 * @property string|null $tags
 * @property mixed|null $metadata
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 * @method static \Illuminate\Database\Eloquent\Builder|File whereCharset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereEmbed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFilenameDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFilenameDownload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFilesize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereMetadata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereModifiedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereModifiedOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereUploadedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereUploadedOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereWidth($value)
 * @mixin \Eloquent
 */
class File extends Model
{
    use HasFactory;

    protected $table = 'directus_files';

    /**
     * @return BelongsTo
     */
    public function userUploaded(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    /**
     * @return BelongsTo
     */
    public function userModified(): BelongsTo
    {
        return $this->belongsTo(User::class, 'modified_by');
    }

    /**
     * @return BelongsTo
     */
    public function folder(): BelongsTo
    {
        return $this->belongsTo(Folder::class, 'folder');
    }
}
