<?php
/**
 * Created by PhpStorm.
 * User: NEVHAV
 * Date: 10/07/17
 * Time: 11:27
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Contactdata;
use Illuminate\Support\Facades\DB;


class AuthenticateController extends Controller
{
    public function getLog(){
        return view('log');
    }

    public function postLog(Request $request){
        $send = $request->only('username', 'password');

//        die(var_dump(JWTAuth::attempt($send)));
        try {

            // xác nhận thông tin người dùng gửi lên có hợp lệ hay không
            if (! $token = JWTAuth::attempt($send)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
//                $request->session()->flash('flash','Fail 1');
//                return redirect()->route('log');
            }
        } catch (JWTException $e) {
            // Xử lý ngoại lệ
            return response()->json(['error' => 'could_not_create_token'], 500);
//            $request->session()->flash('flash','Fail 2');
//            return redirect()->route('log');
        }

//        var_dump($send);
        // xác nhận thành công thì trả về 1 token hợp lệ
        return response()->json(compact('token'));
//        $request->session()->flash('flash3','Success');
//        return redirect()->route('log');
    }

    public function getNew(){
        return view('new_demo');
    }

    public function postNew(Request $request){
        $newUser = new Contactdata;
        $checkData = $request->input('username');
        $check = DB::table('contactdatas')
            ->where('username', $checkData)
            ->count();
        if ($check != 0)
        {
            $request->session()->flash('flash','had user');
//            return redirect()->route('new');
            return response()->json(['error' => 'username_has_had'], 404);
        }
        else
        {
            $newUser->username = $request->input('username');
            $newUser->password = bcrypt($request->input('password'));
            $newUser->email = $request->input('email');
            $newUser->save();
            $request->session()->flash('flash', 'Done');
            return response()->json(['success' => 'new_user_was_created'], 201);
        }
    }
}