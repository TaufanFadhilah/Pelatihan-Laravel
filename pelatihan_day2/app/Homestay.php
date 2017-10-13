<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Homestay extends Model
{
    use HasRoles;
    protected $guard_name = 'web';
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'deskripsi',
        'harga',
        'status',
    ];

    public function Homestay_Transaksi(){
        return $this->hasMany('App\Transaksi');
    }
}
