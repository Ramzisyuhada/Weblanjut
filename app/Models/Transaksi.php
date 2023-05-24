<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "table_transak" ;
    protected $fillable = [
        'name',
        'created_at',
        'selesai',
        'harga_id',
        'user_id',
        'user_item',
        'user_kategori',
        'user_layanan',
        'user_status',
        'harga',
        'Berat',

    ];
    public function class()
    {
        return $this->belongsTo(user1::class,'user_id','id');
    }
    public function class1()
    {
        return $this->belongsTo(harga::class,'harga_id','id');
    }

    public function class2()
    {
        return $this->belongsTo(layanan::class,'user_layanan','id');
    }
    public function class3()
    {
        return $this->belongsTo(kategori::class,'user_kategori','id');
    }
    public function class4()
    {
        return $this->belongsTo(item::class,'user_item','id');
    }
    public function class5()
    {
        return $this->belongsTo(Status::class,'user_status','id');
    }
}
