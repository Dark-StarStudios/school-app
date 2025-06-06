<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KindScore extends Authenticatable
{
    protected $table = 'kind_score';
    protected $primaryKey = 'idKindScore';
    public $timestamps = false;
    protected $fillable = ['idKind', 'idScore'];

    public function kind()
    {
        return $this->belongsTo(Kind::class, 'id_Kind');
    }

    public function score()
    {
        return $this->belongsTo(Score::class, 'id_score');
    }
}
