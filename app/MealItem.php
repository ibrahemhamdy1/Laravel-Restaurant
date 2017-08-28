<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealItem extends Model
{
    //  
    public $table = "meal_item";
    protected $fileable=['meal_id','item_id','dicount'];    

}
