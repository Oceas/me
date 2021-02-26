<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function links()
    {
        return $this->hasMany(link::class);
    }

    public function metaData()
    {
        return $this->hasMany(UserMeta::class);
    }

    public function get_biography()
    {
        return $this->get_meta_value('biography');
    }

    public function set_biography($biography)
    {
        return $this->set_meta_value('biography', $biography);
    }

    public function get_profile_picture()
    {
        return $this->get_meta_value('profile_picture');
    }

    public function set_profile_picture($profile_picture_url)
    {
        return $this->set_meta_value('profile_picture', str_replace("public/", "", $profile_picture_url));
    }

    private function get_meta_value($meta_key)
    {
        $value = optional($this->metaData()->where('meta_key', $meta_key)->first())->meta_value;
        return null === $value ? '' : $value;
    }

    private function set_meta_value($meta_key, $meta_value)
    {
        UserMeta::updateOrCreate(
            ['user_id' => $this->id, 'meta_key' => $meta_key],
            ['meta_value' => $meta_value]
        );
    }
}
