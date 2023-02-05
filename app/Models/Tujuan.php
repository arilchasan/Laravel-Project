<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    protected $fillable = ['kode','kereta','tujuan'];
    
    public function penumpang(){
        return $this->hasMany(PenumpangModels::class);
    }
}
