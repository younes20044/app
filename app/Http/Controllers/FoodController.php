<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{
    public function getfoods($id_category){
        if($id_category==0){


            $foods = Food::OrderBy('name')->get();
           
        }
        else{
          $foods = Food::all()->where('id_category',$id_category);
        }
        

        return view('Admin/foodAdmin')->with("foods", $foods);
    }
    
    public function getfood()
   {
    if (Auth::check()) {
        $user = Auth::user();}
        else{
    $user = null;}
    $category = Category::OrderBy('name')->get();
    $food = Food::OrderBy('name')->get();
    $commentaire=Commentaire::All();
    $foodrd = Food::where('reduction', '>', 0)
            ->orderBy('name')
            ->get();
    return view('welcome')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire)->with('foodrd',$foodrd);
   }
   
   public function getfoodmenu()
   {
    if (Auth::check()) {
        $user = Auth::user();}
        else{
    $user = null;}
    $food = Food::OrderBy('name')->get();
    $category = Category::OrderBy('name')->get();
    $commentaire=Commentaire::All();
    return view('menu')->with('food',$food)->with('category',$category)->with('user',$user)->with('commentaire',$commentaire);

   }
   public function storeFood(Request $request){
    $food = new Food();
    $food->name = $request->name;
    $food->description = $request->description;
    $food->id_category = $request->category;
    $food->price = $request->price;
      $imageName = time().'.'.$request->file->getClientOriginalExtension();
      $request->file->move(public_path('/images/food'), $imageName);
      $food->image = $imageName;


    $food->reduction="0";
    $food->save();
    return redirect()->back();

 }
 public function deletefood($id){
    $food =  Food::find($id);
    $food->delete();
    unlink(public_path('/images/food/'.$food->image));
    return redirect()->back();
   }

   public function update_food(Request $request ,$id){
  $food =  Food::find($id);
   
    
    $food->name = $request->name;
    $food->description = $request->description;
    $food->price = $request->price;
    
      
      $food->reduction="0";
      $food->save();
      return redirect()->back();
    

    
   }
   

}
