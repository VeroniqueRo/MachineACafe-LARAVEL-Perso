<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    protected $table = 'Boisson';
    protected $primaryKey = 'codeboisson';
    protected $fillable =['nomboisson','prixboisson'];
    public $timestamps = false;
}
