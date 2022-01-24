<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cola extends Model
{
    use HasFactory;
    protected $fillable= ['name'];

    /**
     * Get the cola that owns the user.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
