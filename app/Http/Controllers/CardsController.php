<?php

namespace App\Http\Controllers;

use App\Card;
use App\Events\UserWasBanned;
use App\Note;
use App\User;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{

    public function index()
{
    $cards = DB::transaction(function () {
        return  Card::all();//
    });

   // $cards = Card::all();
    
    return view('cards.index',compact('cards'));
}
    public function show(Card $card)
    {
     // auth()->loginUsingId(10);
        auth()->logout();
       $card->load('notes.user');
        // $card=Card::with('notes')->get();
         //return $card;
        return view('cards.show',compact('card'));
    }

    public function ship($userId)
    {
        $user = User::find($userId);

        // Order shipment logic...

        event(new UserWasBanned($user));
    }
}
