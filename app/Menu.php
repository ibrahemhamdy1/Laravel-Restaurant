<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //

    protected $fillable=['title','type','descripion','status','image','user_id'];
}
