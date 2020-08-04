<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanentdetail extends Model
{
    protected $table='tanentdetails';

    protected $fillable=['mobno','aadharcard','pan','mobno2','address','remark','accno','ifsc','accholdername','pic'];
}
