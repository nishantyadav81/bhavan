<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class landlord extends Model
{
    protected $table='landlords';

    protected $fillable=['mobno','aadharcard','dob','pan','mobno2','address','remark','accno','ifsc','accholdername','pic'];
}
