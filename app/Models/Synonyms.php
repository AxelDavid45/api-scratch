<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Synonyms extends Model
{
    protected $table = 'synonyms';

    public function word()
    {
        $this->belongsTo('App\Models\Words');
    }
}