<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tmp extends Model
{
    use HasFactory;
    protected $table="tmps";
    protected $primaryKey ="tmp_id";
}
