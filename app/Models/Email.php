<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Email extends Model
{
    protected $fillable = [
        'user_id','is_checked','id_validt',
    ];
}