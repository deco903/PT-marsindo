<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarpegawaiModel extends Model
{
    use HasFactory;

    protected $table = 'daftar_pegawai';
    protected $fillable = ['nama','posisi','gaji','potongan','pph21'];
}
