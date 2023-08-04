<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;



class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function register(){
        $title = 'Registration';
        $url = url('/register');
        $data = compact('title','url');
        return view('register',$data);
    }
    public function insert_data(Request $data){
        $data->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirmPassword' => 'required|same:password'
            ]
            );
// data send to object
            $person =new register;
            $person->name = $data['name'];
            $person->email = $data['email'];
            $person->password = $data['password'];
            $person->save();
            return redirect('/show');
    }

    public function show_data(){
        $records = register::all();
        $data = compact('records');
        return view('show',$data);
    
    }

    public function delete($id){
        $records = register::find($id);
        $records->delete();
        return redirect()->back();
    }


    public function edit($id){
        $title = 'Update Record';
        $url = url('/update')."/$id";
        $records = register::find($id);
        $data = compact('records' , 'url' , 'title');
        return view('register' , $data);
    }


    public function update($id,Request $update_data){
        $records = register::find($id);
        $records->name = $update_data['name'];
        $records->email = $update_data['email'];
        $records->password = $update_data['password'];
        $records->save();
        return redirect('/show');
    }
    //    echo "<pre>";
    //    print_r($data->all());
    //    echo "</pre>";
    // }}
    public function about(){
        return view('about');
    }

    public function erp(){
        return view('erp');
    }

    public function database(){
        return view('database');
    }

    public function application(){
        return view('application');
    }

    public function it(){
        return view('it');
    }

    public function blog(){
        return view('blog');
    }

    public function quality(){
        return view('quality');
    }

    public function methodology(){
        return view('methodology');
    }

    public function project(){
        return view('project');
    }

    public function security(){
        return view('security');
    }
    public function capability(){
        return view('capability');
    }

    
}
