<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model{
    protected $primaryKey = 'id_item';
    protected $table = 'item';
    protected $fillable = ['name','description'];
}