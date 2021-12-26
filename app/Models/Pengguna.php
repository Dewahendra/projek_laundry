<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = "pengguna";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'Nama', 'Alamat', 'No_Telepon', 'Email', 'Password'];
}
