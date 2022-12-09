<?php

namespace App\Http\Controllers;

use App\Models\Advise;
use App\Models\Booking;
use App\Models\Feedback;
use App\Models\News;
use App\Models\Service;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function homepage(){

        
       $lichhen = Booking::count();
        $nhanvien = DB::table('tb_staff')
        ->join('tb_room', 'tb_room.room_id', '=', 'tb_staff.room_id')
        ->join('tb_position', 'tb_position.CV_id', '=', 'tb_staff.CV_id')
        ->orderBy('tb_staff.NV_id', 'asc')
        ->paginate(4);

        $phanhoi = Feedback::all();
         $nv = Staff::count();

        return view('customer.homepage', compact('nv','phanhoi', 'lichhen','nhanvien'));

    }
    

    public function service(){
        $dieutri = Service::where('type_id', 1)->get();
        $csda = Service::where('type_id', 2)->get();
        $khac = Service::where('type_id', 4)->get();
        return view('customer.service', compact('dieutri', 'csda', 'khac'));
    }
    public function chitietDV($id){
        $service = Service::where('DV_id', $id)->first();
       // dd($service);
        return view('customer.chitietDV', compact('service'));
    }
    public function booking(){
        $service = Service::all();

        return view('customer.booking', compact('service'));
    }

    public function storeBooking(Request $request){
        $request->validate([
            'DL_hoten' => 'required',
            'DL_sdt' => 'required',
            'DL_email' => 'required',
            'DL_diachi' => 'required',
            'DL_thoigian' => 'required',
            

        ]);
        $booking = new Booking();
        $booking->DL_hoten = $request->DL_hoten;
        $booking->DL_sdt = $request->DL_sdt;
        $booking->DL_email = $request->DL_email;
        $booking->DL_diachi = $request->DL_diachi;
        $booking->DL_thoigian = $request->DL_thoigian; 
        $booking->DV_id = $request->DV_id;    
        $booking->save();
        return redirect('/dat-lich')->with('success', 'Đặt lịch hẹn thành công!');
    }
    public function feedback(){
        $feedback = Feedback::all();
        return view('customer.feedback', compact('feedback'));
    }

    public function storeFeedback(Request $request){
        $request->validate([
            'PH_fullname' => 'required',
            'PH_service' => 'required',
            // 'PH_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'PH_content' => 'required',
          
            

        ]);
        $feedback = new Feedback();

        $fileName = time().$request->file('PH_img')->getClientOriginalName();
        $path = $request->file('PH_img')->storeAs('images', $fileName, 'public');
        $requestData["PH_img"] = '/storage/'.$path;    
        
        
        $feedback->PH_img = $fileName;
        $feedback->PH_fullname = $request->PH_fullname;
        $feedback->PH_service = $request->PH_service;
        $feedback->PH_content = $request->PH_content;
          
        $feedback->save();
        return redirect('/feedback')->with('success', 'Gửi phản hồi thành công!');
    }



    public function news(){
        $data = DB::table('tb_news')
        ->join('tb_staff', 'tb_staff.NV_id', '=', 'tb_news.NV_id')
        ->orderBy('tb_news.TT_id', 'asc')
        ->paginate(5);
        return view('customer.news', compact('data'));
    }
    public function chitietTT($id){
        $news = News::where('TT_id', $id)->first();
       // dd($service);
       $data = DB::table('tb_news')
        ->join('tb_staff', 'tb_staff.NV_id', '=', 'tb_news.NV_id')
        ->orderBy('tb_news.TT_id', 'asc')
        ->paginate(5);
        return view('customer.chitietTT', compact('news', 'data'));
    }
    
    public function advise(){
        $service = Service::all();

        return view('customer.advise', compact('service'));
    }

    public function storeAdvise(Request $request){
        $request->validate([
            'TV_hoten' => 'required',
            'TV_sdt' => 'required',
            'TV_ttd' => 'required',
            

        ]);
        $advise = new Advise();
        $advise->TV_hoten = $request->TV_hoten;
        $advise->TV_sdt = $request->TV_sdt;
        $advise->TV_ttd = $request->TV_ttd;
        $advise->DV_id = $request->DV_id;    
        $advise->save();
        return redirect('/tu-van')->with('success', 'Đăng kí thành công!');
    }

}
