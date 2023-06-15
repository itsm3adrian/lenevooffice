<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Namo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewController extends BaseController
{
    public function  index(){
        return view('form');

    }

    public function login(){
        return view('login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->only('Username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('view');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    public function register(Request $request){
        
        
//insert Query
        $namo = new Namo;
        $namo->Username = $request['Username'];
        $namo->password = $request['password'];
        $namo->email = $request['email'];
        $namo->mobile = $request['mobile'];
        $namo->gender = $request['gender'];
        $namo->city = $request['city'];
        $namo->save();
        return redirect('view');

    }

    public function view(){
        $user = Namo::all();
        // dd($user);
        // $data = compact('user');
        return view('view')->with(compact('user'));

    }
    public function delete($id)
    {
        Namo::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = Namo::find($id);
        return view('edit')->with('user', $user);
        
    }


    public function update($id, Request $request)
    {
        // print_r($id); die();
        $user = Namo::find($id);
        // $input = $request->all();
        // $user->update($input);
        $user->Username = $request['Username'];
        $user->password = $request['password'];
        $user->Email = $request['email'];
        $user->Mobile = $request['mobile'];
        $user->Gender = $request['gender'];
        $user->City = $request['city'];
        $user->update();
        return redirect('view');
        
    }
}
