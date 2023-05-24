<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jumlahtransaksi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "table_transak" ;
    protected $fillable = [
        'Berat',
    ];
}
