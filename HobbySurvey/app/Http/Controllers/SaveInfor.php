<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();
class SaveInfor extends Controller
{
    public function save(Request $request)
    {
        $data = array();
        $data['user_name'] = $request->name;
        $data['user_gender'] = $request->gender;
        $data['user_phoneNumber'] = $request->phoneNumber;
        $data['user_email'] = $request->email;
        $data['user_age'] = $request->age;
        $data['user_address'] = $request->address;
        $data['user_petHobby'] = $request->petHobby;
        $data['user_foodHobby'] = $request->foodHobby;

        DB::table('userinfor')->insert($data);
        Session::put('message', 'Thank for your information !');
        return view('welcome');
    }
}
