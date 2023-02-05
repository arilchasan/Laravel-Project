<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerbong extends Model
{
    use HasFactory;
    protected $fillable = ['kode','nama','jumlah_kursi'];
    protected $table = "gerbongs";
}
