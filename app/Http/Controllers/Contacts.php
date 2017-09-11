<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Contacts extends Controller {
	public function index($id = null) {
		if ($id == null) {
			$result = Contact::orderBy('id', 'asc')->get();
			return response()->json(['result' => true, 'data' => $result]);
		}
		else {
            $result = Contact::find($id);
            return response()->json(['result' => true, 'data' => $result]);
		}
	}

	public function store(Request $request) {
		$contact = new Contact;
		$contact->name = $request->input('name');
		$contact->phone_number = $request->input('phone_number');
		$contact->email = $request->input('email');
		$contact->save();

		return 'Contact successfully created with name '.$contact->name;
	}

	public function update(Request $request, $id) {
		$contact = Contact::find($id);
		$contact->name = $request->input('name');
		$contact->phone_number = $request->input('phone_number');
		$contact->email = $request->input('email');
		$contact->save();

		return 'Contact updating id '.$contact->id;
	}

	public function delete(Request $request, $id) {
		$contact = DB::table('contacts')
            ->where('id', $id)
            ->delete();
		$contact=DB::commit();

		return 'Contact successfully deleted with name '.$request->input('id');
	}
}
?>