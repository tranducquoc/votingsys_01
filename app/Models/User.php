<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Poll;
use App\Models\Participant;
use App\Models\Comment;
use App\Models\SocialAccount;
use App\Models\Activity;
use App\Models\ParticipantVote;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'avatar',
        'role',
        'token_verfication',
        'is_active',
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
        'is_active' => 'boolean',
    ];

    public function polls()
    {
        return $this->hasMany(Poll::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function socialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function participantVotes()
    {
        return $this->hasManyThrough(ParticipantVote::class, Participant::class);
    }
}
