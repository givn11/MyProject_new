<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories'; //потому-что указал модель с окончанием s
    protected $fillable = [
        'title', 'alias', 'description'
    ];

    /*public function user()
    {
        //return $this->hasOne(User::class, 'user_id', 'id');
        return $this->hasOne(User::class);
    }*/

    /*protected $guarded = [
        'title'
    ];*/
}
