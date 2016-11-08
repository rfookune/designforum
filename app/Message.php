<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'messages';
    protected $fillable = ['name_first', 'name_last', 'email', 'phone_number', 'message'];
}
