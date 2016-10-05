<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Input;
use Hash;
use Log;

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
                'old_password' => 'required|between:6,16',
                'password' => 'required|confirmed|min:6|max:50|different:old_password',
                'password_confirmation' =>'required',
        ]);
        $credentials = $request->only(
                'password', 'password_confirmation','old_password'
        );
        $user = \Auth::user();
       if(Hash::check($credentials['old_password'], $user->password)) {            
            $user->password = bcrypt($credentials['password']);
            $user->save();
            return redirect('/');
        }
         session()->flash('flash_message_error','Incorrect current password');

        return redirect('/auth/profile');
       
    }

    
}
