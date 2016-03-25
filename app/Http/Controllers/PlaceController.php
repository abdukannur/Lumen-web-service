<?php

namespace App\Http\Controllers;

use App\Place;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaceController extends Controller{

	public function __construct() {

       // header("Access-Control-Allow-Origin: *");
       //  header("Access-Control-Allow-Headers: Content-Type");
        //header("Access-Control-Allow-Origin: http://localhost:8100");
        
    }


    public function index(){
		//$places = DB::select("SELECT * FROM places");
		$places = Place::all();
		return response()->json($places);
						// ->header('Content-Type', 'application/json')
      //       			->header('Access-Control-Allow-Origin','*')
      //      				 ->header('Access-Control-Allow-Methods' , 'POST, GET, OPTIONS, PUT')
            
	}

	public function getPlace(Request $request){
		
		// $place = $_GET['place'];
  //       $loc = DB::select("SELECT * from details where place = '$place'");

  //       return view('pages.list', ['location' => $loc]);

		$place = app('request')->input('place');
		//$pincode = $_GET['place'];
		
		$results = app('db')->select("SELECT * FROM places where place='$place' ");
		//$plac = Place::find($place);
		//$place = Place::find($id);
		return response()->json($results);
	}

	public function savePlace2(Request $request){
		$place = app('request')->input('place');
		$pincode = app('request')->input('pincode');
		$bed = app('request')->input('bed');
		$square_feet = app('request')->input('square_feet');
		$price = app('request')->input('price');

		$results= app('db')->insert("INSERT INTO places ('id','place','pincode','bed','square_feet','price','created_at','updated_at') VALUES('',$place,'$pincode','$bed','square_feet','price','now()','now()')");	
		//$place = Place::create($request->all());
		//$place->save();
		return response()->json($results);
	}

	public function savePlace(Request $request){
		//dd($request->all());
		$place = Place::create($request->all());
		//$place->save();
		return response()->json($place);
	}

	public function deletePlace($id){
		$place = Place::find($id);

		$place->delete();

		return response()->json('success');

	}

	public function updatePlace(Request $request,$id){
		$place = Place::find($id);

		$place->place = $request->input('place');
		$place->pincode = $request->input('pincode');
		$place->bed = $request->input('bed');
		$place->square_feet = $request->input('square_feet');
		$place->price = $request->input('price');

		$place->save();

		return  response()->json($place);
		
	}

	public function login(Request $request){
		$username = app('request')->input('username');
		$password = app('request')->input('password');
		$result = app('db')->select("SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
		if($result){
			return response()->json($result);
		} 
	}

	public function register(Request $request){

		$user = User::create($request->all());
		return response()->json($user);
	}

}

?>






