<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik_toko extends Model
{
    use HasFactory;
    protected $table = "pemilik_toko";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'Nama', 'Alamat', 'No_Telepon', 'Nama_Toko', 'Email', 'Password'];
}
