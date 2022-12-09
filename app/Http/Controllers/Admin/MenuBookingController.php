<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Booking;

class MenuBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_booking')
        ->join('tb_service', 'tb_service.DV_id', '=', 'tb_booking.DV_id')
        ->orderBy('tb_booking.DL_id', 'asc')
        ->paginate(5);
        if($key = request()->key){
            $data = DB::table('tb_booking')
            ->join('tb_service', 'tb_service.DV_id', '=', 'tb_booking.DV_id')
            ->orderBy('tb_booking.DL_id', 'asc')
            ->where('DL_hoten','like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.menu.booking.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();

        return view('admin.menu.booking.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'DL_hoten' => 'required',
            'DL_sdt' => 'required',
            'DL_email' => 'required|email',
            'DL_diachi' => 'required',
            'DL_thoigian' => 'required',
            

        ]);
        $booking = new Booking();
        $booking->DL_hoten = $request->DL_hoten;
        $booking->DL_sdt = $request->DL_sdt;
        $booking->DL_email = $request->DL_email;
        $booking->DL_diachi = $request->DL_diachi;
        $booking->DL_thoigian = $request->DL_thoigian; 
        $booking->DL_active = $request->DL_active; 
        $booking->DV_id = $request->DV_id;    
        $booking->save();
        return redirect('admin/menu/booking')->with('success', 'Đặt lịch thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $service = Service::all();
       
        return view('admin.menu.booking.edit', compact('booking','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = new Booking();
        $booking->DL_hoten = $request->DL_hoten;
        $booking->DL_sdt = $request->DL_sdt;
        $booking->DL_email = $request->DL_email;
        $booking->DL_diachi = $request->DL_diachi;
        $booking->DL_thoigian = $request->DL_thoigian; 
        $booking->DL_active = $request->DL_active; 
        $booking->DV_id = $request->DV_id;  

        $booking = Booking::where('DL_id', '=', $id)
        ->update([
            'DL_hoten' =>  $booking->DL_hoten,
            'DL_sdt' => $booking->DL_sdt,
            'DL_email' => $booking->DL_email,
            'DL_diachi' => $booking->DL_diachi,
            'DL_thoigian' => $booking->DL_thoigian,
            'DL_active' => $booking->DL_active,
            'DV_id' => $booking->DV_id,

        ]);
        return redirect('admin/menu/booking')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('admin/menu/booking')->with('success', 'Đã xóa thành công!');
    }
}
