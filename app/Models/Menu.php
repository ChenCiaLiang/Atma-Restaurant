<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'nama',
        'harga',
        'jenis',
        'gambar_makanan',
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

}
