<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodities extends Model
{
    //不使用Lravel提供的默认时间
    public $timestamps = false;

    //可批量填充的字段
    public $fillable = [
        'name','price','content',
    ];
}
