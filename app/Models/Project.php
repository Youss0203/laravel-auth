<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'nome',
        'descrizione',
        'giorni',
        'linguaggi_usati',
        'repo_url',
    ];
}
