<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenumpangModels extends Model
{
    use HasFactory;

    // protected $fillable = ['no_pendaftaran','nama','tanggal','alamat'];
    protected $guarded = ['id'];

    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class);
    }

    public function scopeFilter($query, array $filters)
    {
           if(isset($filters['search']) ? $filters ['search'] : false) {
            return $query->where('nama','like','%' .$filters['search']. '%')
            ->orWhere('alamat','like','%'.$filters['search'].'%');
           }
           if(isset($filters['tujuan_id']) ? $filters ['tujuan_id'] : false) {
            return $query->where('tujuan_id', $filters['tujuan_id']);
           }
       

    }
}
