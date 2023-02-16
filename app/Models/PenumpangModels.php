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

        if (isset($filters['tujuan_id'])) {
            $query->where('tujuan_id', $filters['tujuan_id']);
        } 

        
        if (isset($filters['search'])) {
            $query->where('nama', 'like', '%' . $filters['search'] . '%')
                ->orWhere('alamat', 'like', '%' . $filters['search'] . '%')
                ->orWhere('tanggal', 'like', '%' . $filters['search'] . '%')
                ->orWhere('no_pendaftaran', 'like', '%' . $filters['search'] . '%');
        }
        
    }
}
