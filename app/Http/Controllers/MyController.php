<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function getHome(){
    	return ('view');
    }

    public function getShow(){
    	$user = DB::table('contacts')
    	->select('name', 'phone_number', 'email')
    	->get();
    	return view('show', ['users'=>$user]);
    }

    /*public function getNew(){
    	return view('new');
    }*/

    public function getNew(){
    	return view('new');
    }

    public function postNew(Request $request){
    	$contact = new Contact;
    	$new_name = $request->input('name');
    	$new_phone_number = $request->input('phone_number');
    	$new_email = $request->input('email');
        if (strlen($new_email)==0)
        {
            $new_email = "";
        }
    	$count = DB::table('contacts')
    	->where('phone_number', $new_phone_number)
    	->count();

   		if (strlen($new_phone_number)==0)
    	{
    		$request->session()->flash('error_number_had','You can\'t blank phonenumber!');	
    		return redirect()->route('new');
    	}
    	
    	else
    	{
	    	if ($count == 0)
	    	{
	    		$contact->name = $new_name;
	    		$contact->phone_number = $new_phone_number;
	    		$contact->email = $new_email;
	    		$contact->save();
	    		$request->session()->flash('flash_message','Completed!');
	    		return redirect()->route('new');
	    	}

	    	else
	    	{
	    		$request->session()->flash('error_number_had','Your contact had this phonenumber!');
	    		return redirect()->route('new');
	    	}
    	}
    }

    public function getSearch(){
    	return view('search');
    }

    public function postResultSearch(Request $request){
    	$contact = new Contact;
    	$search = $request->input('search');
    	$check_name = DB::table('contacts')
    	->where('name', $search)
    	->get();

    	$check_phone = DB::table('contacts')
    	->where('phone_number', $search)
    	->get();

    	return view('resultSearch',['check_name'=>$check_name, 'check_phone'=>$check_phone, 'search'=>$search]);
    }

    public function getDelete(Request $request){
        $user = DB::table('contacts')
        ->select('id','name', 'phone_number', 'email')
        ->get();
        return view('delete', ['users'=>$user]);
    }

    public function postDelete(Request $request, $id){
        $delete = DB::table('contacts')
        ->where('id', $id)
        ->delete();
        $delete = DB::commit();
        $user = DB::table('contacts')
        ->select('id','name', 'phone_number', 'email')
        ->get();
        return redirect()->route('delete', ['users'=>$user]);
    }
}
?>