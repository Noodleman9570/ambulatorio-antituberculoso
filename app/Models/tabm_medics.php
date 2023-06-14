<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabm_medics extends Model
{
    use HasFactory;

    public function medicos(){
        return $this->belongsTo(tabm_medics::class, 'espcmd_codig', 'espcmd_codig');
    }
}
