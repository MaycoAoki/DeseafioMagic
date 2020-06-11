<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Filme;

class ator extends Model
{
    protected $fillable = ['nome_ator'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function filmes(){
        return $this->hasMany(Filme::class);
    }
}
