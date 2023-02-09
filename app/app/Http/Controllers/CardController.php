<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function deal(Request $request){
        $n = $request->numberofppl;
        if($n<1 || is_null($n)){
            return response()->json(['success'=>false,'errors'=>'Input value does not exist or value is invalid.']);
        }
        $deck = [];
        //Spade = S, Heart = H, Diamond = D, Club = C
        $suits = array('S', 'H', 'D', 'C'); 
        //Card 2 to 9 are, as it is, 1=A,10=X,11=J,12=Q,13=K
        $cards = array('A', 2, 3, 4, 5, 6, 7, 8, 9, 'X', 'J', 'Q', 'K');
        foreach($suits as $suit){
            foreach($cards as $card){
                $deck[] = $suit.'-'.$card;
            }
        }
        //shuffle cards
        $collection = collect($deck);
        $shuffled = $collection->shuffle();
        $deck = $shuffled->all();
        
        //distribute cards
        $person_cards = [];
        while(!empty($deck)){
            for($i=1; $i<=$n && !empty($deck); $i++){
                $person_cards[$i][] = array_shift($deck); 
            }
        }
        return response()->json(['success'=>true,'result'=>$person_cards]);
    }
}
