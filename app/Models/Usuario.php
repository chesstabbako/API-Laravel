<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable= ['name','cola_id', 'atencione_id'];

    use SoftDeletes;

    /**
     * Get the colas for cola.
     */
    public function colas()
    {
        return $this->hasMany(Cola::class);
    }

    /**
     * Get the users for atenciones.
     */
    public function atenciones()
    {
        return $this->hasMany(Atencione::class);
    }
}
