<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Food;
use App\Models\Resarvation;
use App\Models\Visitor;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::all();
        return view('Admin/users')->with('users', $users);
    }
    public function dashboard(){
        $usersCount = User::all()->count();
      
       
       $visitors = Visitor::where('visit_date', now()->format('Y-m-d'))->count();
       $orders = Resarvation::where('date',now()->format('Y-m-d'))->count();
       $earn =Resarvation::where('date',now()->format('Y-m-d'))->sum('prix');
       return view('Admin/dashboardAdmin')->with('usersCount',$usersCount)->with('orders',$orders)->with('visitors',$visitors)->with('earn',$earn);
        
    }
}