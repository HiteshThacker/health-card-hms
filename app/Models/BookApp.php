<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookApp extends Model
{
    use HasFactory;
    protected $table="book_apps";
    protected $primaryKey ="app_id";

    public function getAppDateAttribute($value)
    {
        return date("d-m-y",strtotime($value));
    }
}
