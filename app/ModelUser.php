<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    public $timestamps= false;
    protected $table ='model_users';
    protected $fillable=[
        'name',
        'email',
        'password',
        'tgllahir',
    ];
}
