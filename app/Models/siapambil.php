<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siapambil extends Model
{
    use HasFactory;
    protected $table = "table_trasak" ;
    protected $fillable = [
        'user_status',       
    ];
}
