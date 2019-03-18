<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tovar';

    protected $fillable = ['fire_id', 'asin', 'tag', 'title', 'group_tovar', 'image_src'];
}

