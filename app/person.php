<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $table = 'test';
  //  protected $primaryKey = 'id1';
    public $timestamps = false;
   // protected $connection = 'sqlite';
   protected $fillable = ['name'];
}
