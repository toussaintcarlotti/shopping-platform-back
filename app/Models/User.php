<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /******************************
     *** GETTERS
     ******************************/
    public function avatar(): Attribute
    {
        return Attribute::make(
            get: function () {
                // check if the user has a gravatar
                $url = 'https://www.gravatar.com/avatar/'.md5($this->email).'?d=mp';
                $headers = @get_headers($url);
                if ($headers && strpos($headers[0], '200')) {
                    return $url;
                }

                return asset('_keenthemes/media/avatars/blank.png');
            },
        );
    }
}
