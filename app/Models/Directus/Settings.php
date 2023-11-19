<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Directus\Setting
 *
 * @property int $id
 * @property string $project_name
 * @property string|null $project_url
 * @property string $project_color
 * @property string|null $project_logo
 * @property string|null $public_foreground
 * @property string|null $public_background
 * @property string|null $public_note
 * @property int|null $auth_login_attempts
 * @property string|null $auth_password_policy
 * @property string|null $storage_asset_transform
 * @property mixed|null $storage_asset_presets
 * @property string|null $custom_css
 * @property string|null $storage_default_folder
 * @property mixed|null $basemaps
 * @property string|null $mapbox_key
 * @property mixed|null $module_bar
 * @property string|null $project_descriptor
 * @property string $default_language
 * @property mixed|null $custom_aspect_ratios
 * @property string|null $public_favicon
 * @property string $default_appearance
 * @property string|null $default_theme_light
 * @property mixed|null $theme_light_overrides
 * @property string|null $default_theme_dark
 * @property mixed|null $theme_dark_overrides
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAuthLoginAttempts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAuthPasswordPolicy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereBasemaps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCustomAspectRatios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCustomCss($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDefaultAppearance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDefaultLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDefaultThemeDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDefaultThemeLight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereMapboxKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereModuleBar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereProjectColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereProjectDescriptor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereProjectLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereProjectUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings wherePublicBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings wherePublicFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings wherePublicForeground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings wherePublicNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereStorageAssetPresets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereStorageAssetTransform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereStorageDefaultFolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereThemeDarkOverrides($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereThemeLightOverrides($value)
 * @mixin \Eloquent
 */
class Settings extends Model
{
    use HasFactory;

    protected $table = 'directus_settings';

    /**
     * @return BelongsTo
     */
    public function storageDefaultFolder(): BelongsTo
    {
        return $this->belongsTo(Folder::class, 'storage_default_folder');
    }

    /**
     * @return BelongsTo
     */
    public function publicFavicon(): BelongsTo
    {
        return $this->belongsTo(File::class, 'public_favicon');
    }

    /**
     * @return BelongsTo
     */
    public function publicForeground(): BelongsTo
    {
        return $this->belongsTo(File::class, 'public_foreground');
    }

    /**
     * @return BelongsTo
     */
    public function publicProjectLogo(): BelongsTo
    {
        return $this->belongsTo(File::class, 'project_logo');
    }

    /**
     * @return BelongsTo
     */
    public function publicBackground(): BelongsTo
    {
        return $this->belongsTo(File::class, 'public_background');
    }
}
