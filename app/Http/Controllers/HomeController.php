<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectGroup;
use App\Http\Requests\User\PasswordRequest;
use App\Http\Requests\User\UserCreateRequest;
use App\User; 
use Auth;
use Hash;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function testTiny(Request $request){
        dd($request);
    }

    protected function changePassword()
    {
        return view('auth.profile.changepassword');
    }

    public function passwordUpdate(PasswordRequest $request, $id) {
        $user = Auth::user();
       
        $current_password = $request->input('cpassword');
        $new_password = $request->input('password');
        $old_password = $user->password;

        if ($request->input('password') != $request->input('passconf')) {
            $data = 'New Password doesn\'t match to Confirm Password';
            $status = 'error';
        } else {
            if (Hash::check($current_password, $old_password)) {
                $password = array(
                    'password' => Hash::make($new_password)
                );
                $return = User::where('id', $id)->update($password);

                if ($return) {
                    $data = 'Password Successfully Updated.....';
                    $status = 'success';
                } else {
                    $data = 'Your Password not Updated. Please try after some time...';
                    $status = 'error';
                }
            } else {
                $data = 'Current Password is wrong. Please enter correct Current Password...';
                $status = 'error';
            }
        }
        return redirect()->back()->with(''.$status.'', $data);
    }


    protected function newuser()
    {
      
        if(Auth::user()->id!=1){
        $data = 'Permission Denied....';
        $status = 'error';
        return redirect('/')->with(''.$status.'', $data);
        }
        else
        return view('auth.profile.createnewuser');
    }

    protected function newuserregister(UserCreateRequest $request){
       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);

        $data = 'New User ['.$request->name.'] Created';
        $status = 'success';
        return redirect('/')->with(''.$status.'', $data);
     }

}
