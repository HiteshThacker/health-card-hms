<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingUpdate extends Model
{
    use HasFactory;
    protected $table="pending_updates";
    protected $primaryKey ="pu_id";
}
