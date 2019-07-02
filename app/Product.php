<?php

namespace App;

use JordanMiguel\LaravelPopular\Traits\Visitable;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use Resizable;
    use Visitable;
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
