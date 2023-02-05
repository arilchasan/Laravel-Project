<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenumpangModels extends Model
{
    use HasFactory;

    // protected $fillable = ['no_pendaftaran','nama','tanggal','alamat'];
     protected $guarded = ['id'];

     public function tujuan(){
        return $this->belongsTo(Tujuan::class);
    }

}
