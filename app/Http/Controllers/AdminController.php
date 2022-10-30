<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Oreder;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user(){
        $data=User::all();
        return view('admin.users' ,compact("data"));
    }






    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }








    public function foodmenue(){
        $data=food::all();

        return view('admin.foodmenue',compact('data'));
    }




    public function deletemenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }





    public function updatefood($id){
        $data=food::find($id);
        return view("admin.updatefood" ,compact('data'));
    }





    public function update( Request $request , $id){
        $data=Food::find($id);

        $image = $request->image;

        $imagename =time(). '_'. $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image=$imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }






    public function upload(Request $request){

        $data= new food;

        $image = $request->image;

        $imagename =time(). '_'. $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image=$imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();

    }






    public function reservation(Request $request){
        $data= new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }





    public function viewreservation(){
        if(Auth::id()){
            $data=reservation::all();
            return view("admin.adminreservation",compact('data'));
        }else{
            return redirect('login');
        }

    }






    public function viewchef(){
        $data = Foodchef::all();
        return view('admin.adminchef' , compact("data"));
    }





    public function uploadchef(Request $request){
        $data =new foodchef;
        $image = $request->image;

        $imagename =time(). '_'. $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);

        $data->image=$imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }




    public function updatechef($id){
        $data=Foodchef::find($id);
        return view("admin.updatechef" , compact('data'));
    }





    public function updatefoodchef(Request $request, $id){
        $data=Foodchef::find($id);

        $image = $request->image;
        if($image){
            $imagename =time(). '_'. $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image=$imagename;
        }
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();

    }





    public function deletechef($id){
        $data = foodchef::find($id);
        $data->delete();
        return redirect()->back();

    }




    public function orders(){
        $data = Oreder::all();
        return view('admin.orders' , compact('data'));
    }





    public function search(Request $request){
        $search = $request->search;
        $data=Oreder::where('name','LIKE','%'.$search.'%')->orWhere('foodname','LIKE','%'.$search.'%')->get();
        return view('admin.orders' , compact('data'));
    }


}
