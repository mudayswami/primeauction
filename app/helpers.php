<?php
use App\Models\AuctionCategory;
function category(){
        return AuctionCategory::where('status',1)->select('category')->get();
        
}


?>