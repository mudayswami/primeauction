<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','lot','bid_amount','max_bid_amount','reserve_met','status','paid','transaction'];

    public function lots(){
        return $this->belongsTo(Lot::class,'lot');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
