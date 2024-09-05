<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    protected $table='address_book';

    protected $fillable = ['user_id','address1','address2','address3','town','post_code','country'];


}
