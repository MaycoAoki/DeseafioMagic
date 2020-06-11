<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Filme;

class categoria extends Model
{
    protected $fillable = ['tipo_filme', 'classificacao'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function filmes(){
        return $this->hasMany(Filme::class);
    }
}
