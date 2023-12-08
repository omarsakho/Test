<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'age'];

    protected $table = 'apprenants';

    protected $visible = ['id', 'nom', 'prenom', 'age']; 

    protected $attributes = [
        'age' => 0,
    ];

    public function formation()
    {
        return $this->belongsToMany(Formation::class, 'apprenant_formation', 'apprenant_id', 'formation_id');
    }
}
