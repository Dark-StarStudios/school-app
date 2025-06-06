<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Score extends Authenticatable
{
    protected $table = 'score';
    protected $primaryKey = 'idScore';
    public $timestamps = false;
    protected $fillable = [
        'idTafeltje',
        'score'
    ];
    public function tafel()
    {
        return $this->belongsTo(Tafel::class, 'tafeltje');
    }

    public function kindScores()
    {
        return $this->hasMany(KindScore::class, 'id_score');
    }
}