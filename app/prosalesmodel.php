<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prosalesmodel extends Model
{
    public $table = "prosalesmodels";
    
    public $fillable = ['pro_name', 'pro_price', 'pro_weight','pro_ctns','sales_pro_key'];
}
