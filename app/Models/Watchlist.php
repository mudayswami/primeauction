<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $table = 'watchlist';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function lot(){
        return $this->belongsTo(Lot::class,'lot_id');
    }

}
