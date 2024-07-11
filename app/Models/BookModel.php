<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'book';

    public function relPersons()
    {
        return $this->hasOne('App\Models\PersonModel', foreignKey: 'id', localKey: 'id_person');
    }
}
