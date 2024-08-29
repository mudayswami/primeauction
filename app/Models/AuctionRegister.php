<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionRegister extends Model
{
    use HasFactory;

    protected $table = 'auction_register';

    protected $fillable = ['user_id','auction_id','payment_card','address','phone_number','vat_number','company'];

    public function auction(){
        return $this->belongsTo(Auction::class,'auction_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
