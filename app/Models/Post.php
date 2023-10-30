<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'imagen', 'user_id'];


    public function user()
    { //Referencia 1 A 1
        return $this->belongsTo(User::class, 'user_id')->select(['name', 'username']);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'post_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
