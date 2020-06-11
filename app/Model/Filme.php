<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Categoria;
use App\Model\ator;
use App\Model\Diretor;

class filme extends Model
{
    protected $fillable = ['nome_filme','ano_filme'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function categoria(){
        return $this->hasOne(Categoria::class);
    }

    public function ator(){
        return $this->hasOne(Ator::class);
    }

    public function diretor(){
        return $this->hasOne(Diretor::class);
    }


}
