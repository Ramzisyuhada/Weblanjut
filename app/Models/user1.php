<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
    ];
    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
