<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $guarded = [];

    function auction(){
        return $this->belongsTo(Auction::class);
    }

    function lot(){
        return $this->belongsTo(Lot::class);
    }

    function bid(){
        return $this->belongsTo(Bids::class);
    }

    function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
