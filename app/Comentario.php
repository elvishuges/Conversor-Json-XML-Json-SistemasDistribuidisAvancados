<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [        
        'conteudo',
        'post_id',        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
