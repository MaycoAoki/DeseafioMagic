<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Filme;

class diretor extends Model
{
    protected $fillable = ['nome_diretor'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function filmes(){
        return $this->hasOne(Filme::class);
    }
}
