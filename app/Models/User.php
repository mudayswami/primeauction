<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
        protected $table = 'user';
        protected $fillable = ['user_id','first_name','last_name','email','password','address','verified','town','post_code',
        'country','phone_number','phone_country','seller','photo_id','address_proof','entity','company','vat_number',
        'subscribe','interested_category'
    ]; 
    public function bids(){
        return $this->hasMany(Bids::class); 
    }
}
