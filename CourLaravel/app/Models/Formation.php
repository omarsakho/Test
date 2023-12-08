<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description'];

    protected $table = 'formations';

    protected $visible = ['id', 'titre', 'description'];

    public function apprenants()
    {
        return $this->belongsToMany(Apprenant::class, 'apprenant_formation', 'formation_id', 'apprenant_id');
    }
}
