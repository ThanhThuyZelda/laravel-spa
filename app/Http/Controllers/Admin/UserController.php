<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUsers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\Bill;
use App\Models\Staff;



class UserController extends Controller
{
    public function admin(){
        // return view('admin.dashboard');
        $booking = Booking::count();

        $bill = Bill::sum('HD_tratruoc');
        $staff = Staff::count();

        $result = DB::select(DB::raw("SELECT COUNT(DL_id) as soluong, tb_service.DV_name from tb_booking 
                                     LEFT JOIN tb_service ON tb_service.DV_id = tb_booking.DV_id 
                                     GROUP BY tb_booking.DV_id, tb_service.DV_name"));
        $data = "";
        foreach($result as $val ){
            $data .= "['".$val->DV_name."',    ".$val->soluong."],";
        }
        $chartData = $data;
        return view('admin.menu.statistical.index', compact('chartData', 'booking', 'bill', 'staff'));
    }
    public function login(){
        return view("admin.login");
    }   
    public function register(){
        return view("admin.register");
    }    
    public function registerUser(Request $request){
       $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:tb_user_admin',
            'phone' => 'required',
            'password' => 'required|min:6|max:32',
       ]);
       $user = new AdminUsers();
       $user->fullname = $request->fullname;
       $user->email = $request->email;
       $user->phone = $request->phone;
       $user->password = Hash::make($request->password);
       $res = $user->save();
       if($res){
            return back()->with('success','You have registered successfuly');
       }else{
            return back()->with('fail','Something wrong');
       }
    }


    // login
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
       ]);
       $user = AdminUsers::where('email','=',$request->email)->first();
       if($user){
            if(Hash::check($request->password, $user->password)){
                $request->Session()->put('LoginId', $user->id);
                return redirect('admin');
            }
            else{
                return back()->with('fail', 'Password not matches.');
            }
       }else{
            return back()->with('fail', 'This email is not registered.');
       }
    }
    // public function logout(){
    //     if(session()->has('LoginId')){
    //         session()->pull('LoginId');
    //         return redirect('admin/login');
    //     }
    //     else return back();
    // }
    public function logout(Request $request)
    {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
 
         return redirect('admin/login');
        }
    

}
