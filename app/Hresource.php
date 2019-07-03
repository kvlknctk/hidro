<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hresource extends Model
{

    protected $fillable = ['name', 'mail', 'gsm', 'city', 'cv'];
}
