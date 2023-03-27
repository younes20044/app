<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resarvation;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

use App\Models\Food;


class ResarvationController extends Controller
{
    public function addReservation(Request $request){
        $Resarvation = new Resarvation;
        
            $user = Auth::user();
            
        $food=Food::Find($request->food_id);
       $Resarvation->user_id=$user->id;
       $Resarvation->food_id=$request->food_id;
       $Resarvation->nb=$request->nb;
       $Resarvation->prix=($food->price-($food->price*($food->reduction/100)))*$request->nb;
       $Resarvation->address_reservation=$request->address_reservation;
       $Resarvation->numero_de_telephone=$request->numero_de_telephone;
       $Resarvation->confimer="no";
       $Resarvation->date = now()->format('Y-m-d');

        $Resarvation->save();
      
        $category = Category::OrderBy('name')->get();
        $food = Food::OrderBy('name')->get();
        return view('menu')->with('food',$food)->with('category',$category)->with('user',$user);
        

}
    public function getReservations(){
        $reservations = Resarvation::orderBy('id', 'desc')->get();
        return view('Admin/reservation')->with('reservations',$reservations);
    }
    public function updateStatus($id){
        $reservation = Resarvation::find($id);
        $reservation->confimer = 'yes';
        $reservation->save();
        return redirect()->back();
    }


}
