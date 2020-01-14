<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tw_account extends Model
{
    //
    protected $fillable = [
        'app_id', 'user_id', 'screen_name', 'oauth_token', 'oauth_token_secret',
    ];
}
