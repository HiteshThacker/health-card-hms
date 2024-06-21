<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Data extends Model
{
    use HasFactory;
    protected $table="data";
    protected $primaryKey ="data_id";

    // public function getHealthIdAttribute($value)
    // {
    //     return Str::substr($value,0,4)." ".Str::substr($value,4,4)." ".Str::substr($value,8,4);
    //     //return date("d-m-y",strtotime($value));
    // }
}
