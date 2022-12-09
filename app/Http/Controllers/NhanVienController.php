<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class NhanVienController extends Controller
{
    public function login(){
        return view("nhanvien.login");
    } 
    public function nhanvien(){
        return view('nhanvien.dashboard');
    }
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
       ]);
       $user = Staff::where('email','=',$request->email)->first();
       if($user){
            if(Hash::check($request->password, $user->password)){
                $request->Session()->put('LoginId', $user->id);
                return redirect('nhanvien');
            }
            else{
                return back()->with('fail', 'Password not matches.');
            }
       }else{
            return back()->with('fail', 'This email is not registered.');
       }
    }
    
    public function logout(Request $request)
    {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
 
         return redirect('nhanvien/login');
    }
}
