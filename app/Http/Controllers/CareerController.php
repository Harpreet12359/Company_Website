<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use Carbon\Carbon;

class CareerController extends Controller
{
    public function career(){
        return view('career');
    } 

    public function career_submit(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        $resume = 'test.png';
        $time = Carbon::now();
        $insert = array(
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'resume' => $resume,
            'created_at' => $time,
            'updated_at' => $time
 );
 Career::insert($insert);

        return view('career');
    } 
}
