<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tafel extends Authenticatable
{
    protected $table = 'tafel';
    protected $primaryKey = 'idTafeltje';
    public $timestamps = false;
    protected $fillable = ['nummer'];

    public function scores()
    {
        return $this->hasMany(Score::class, 'tafeltje');
    }
}