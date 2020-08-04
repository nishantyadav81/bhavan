<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class landlordproperty extends Model
{
    protected $table='landlordproperty';

    protected $fillable=['mobno','category','flat','floor','bunglow','builtuparea','carpetarea','description','location','watersupply','electricity','parking','status','rentamout'];
}
