<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Season extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'product_id' => 'required',
        'season_id' => 'required',
    );
}
