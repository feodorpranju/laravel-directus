<?php

namespace App\Models\Directus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Directus\User
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $location
 * @property string|null $title
 * @property string|null $description
 * @property mixed|null $tags
 * @property string|null $avatar
 * @property string|null $language
 * @property string|null $tfa_secret
 * @property string $status
 * @property string|null $role
 * @property string|null $token
 * @property string|null $last_access
 * @property string|null $last_page
 * @property string $provider
 * @property string|null $external_identifier
 * @property mixed|null $auth_data
 * @property bool|null $email_notifications
 * @property string|null $appearance
 * @property string|null $theme_dark
 * @property string|null $theme_light
 * @property mixed|null $theme_light_overrides
 * @property mixed|null $theme_dark_overrides
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAppearance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAuthData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereExternalIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTfaSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereThemeDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereThemeDarkOverrides($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereThemeLight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereThemeLightOverrides($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereToken($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    use HasFactory;

    protected $table = 'directus_users';

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role');
    }

    /**
     * @return HasMany
     */
    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class, 'user');
    }

    /**
     * @return HasMany
     */
    public function dashboards(): HasMany
    {
        return $this->hasMany(Dashboard::class, 'user_created');
    }

    /**
     * @return HasMany
     */
    public function panels(): HasMany
    {
        return $this->hasMany(Panel::class, 'user_created');
    }

    /**
     * @return HasMany
     */
    public function shares(): HasMany
    {
        return $this->hasMany(Share::class, 'user_created');
    }

    /**
     * @return HasMany
     */
    public function sentNotifications(): HasMany
    {
        return $this->hasMany(Notification::class, 'sender');
    }

    /**
     * @return HasMany
     */
    public function receivedNotifications(): HasMany
    {
        return $this->hasMany(Notification::class, 'recipient');
    }

    /**
     * @return HasMany
     */
    public function flows(): HasMany
    {
        return $this->hasMany(Flow::class, 'user_created');
    }

    /**
     * @return HasMany
     */
    public function operations(): HasMany
    {
        return $this->hasMany(Operation::class, 'user_created');
    }

    /**
     * @return HasMany
     */
    public function uploadedFiles(): HasMany
    {
        return $this->hasMany(File::class, 'uploaded_by');
    }

    /**
     * @return HasMany
     */
    public function modifiedFiles(): HasMany
    {
        return $this->hasMany(File::class, 'modified_by');
    }

    /**
     * @return HasMany
     */
    public function presets(): HasMany
    {
        return $this->hasMany(Preset::class, 'user');
    }
}
