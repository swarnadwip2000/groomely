<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function viewWishlist()
    {
        $get_wishlist = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('user.wishlist.list',compact('get_wishlist'));
    }
}
