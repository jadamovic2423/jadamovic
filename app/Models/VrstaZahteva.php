<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrstaZahteva extends Model
{
    protected $table = 'zahtevs';
    protected $primaryKey = 'zahtev_id';
    protected $fillable = ['vrsta', 'naziv'];
}
