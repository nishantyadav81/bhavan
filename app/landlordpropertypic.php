<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class landlordpropertypic extends Model
{
    protected $table='landlordpropertypics';

    protected $fillable=['mobno','pic'];
}
