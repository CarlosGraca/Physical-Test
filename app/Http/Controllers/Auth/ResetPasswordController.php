<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Input;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    //use ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function reset(Request $request)
    {   
            $this->validate($request, [
                    'password' => 'required|min:6|confirmed',
            ]);
            $credentials = $request->only(
                    'password', 'password_confirmation'
            );
            $user = \Auth::user();
            $user->password = bcrypt($credentials['password']);
            $user->save();
            return redirect('/');
    }

    
}
