<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    protected $table = 'person';

    public function relBooks()
    {
        return $this->hasMany('App\Models\BookModel', foreignKey: 'id_person');
    }
}
