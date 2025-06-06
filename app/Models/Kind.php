<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use models\KindScore;


class Kind extends Authenticatable
{
    protected $table = 'kind';
    protected $primaryKey = 'idKind';
    public $timestamps = false;

    protected $fillable = [
        'gebruikersnaam',
        'wachtwoord',
    ];

    protected $hidden = [
        'wachtwoord',
    ];

    public function kindScores()
    {
        return $this->hasMany(KindScore::class, 'id_Kind');
    }
}
