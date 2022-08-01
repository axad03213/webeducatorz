<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function login()
    {
        $meta = general::find(1);
        return view('login.login', compact('meta'));
    }

    public function authlogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_student == '1') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')
                    ->with('error', 'Email-Address And Password Are Wrong.');
            }
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function dashboard(){
        return view('lms.dashboard');
    }
}
