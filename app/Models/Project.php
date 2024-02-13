<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descrizione',
        'giorni',
        'linguaggi_usati',
        'Repo_url',
    ];
}
