<?php

namespace App\Http\Controllers\NhanVien;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_bill')
        ->join('tb_booking', 'tb_booking.DL_id', '=', 'tb_bill.DL_id')
        ->join('tb_service', 'tb_service.DV_id', '=', 'tb_booking.DV_id')
        ->orderBy('tb_bill.HD_id', 'asc')
        ->paginate(5);
        return view('nhanvien.thanhtoan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = Booking::all();

        return view('nhanvien.thanhtoan.create', compact('booking'));
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
            'HD_tratruoc' => 'required',
            'DL_id' => 'required',

        ]);
        $bill = new Bill();
        $bill->HD_tratruoc = $request->HD_tratruoc;
        $bill->HD_active = $request->HD_active;
        $bill->DL_id = $request->DL_id;
        $bill->save();
        return redirect('nhanvien/thanhtoan')->with('success', 'Thêm hóa đơn thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = Bill::find($id);
        $booking = Booking::all();
        $service = Service::all();
       
        return view('nhanvien.thanhtoan.edit', compact('bill','booking','service'));
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
        $bill = new Bill();
        $bill->HD_tratruoc = $request->HD_tratruoc;
        $bill->HD_active = $request->HD_active;
        $bill->DL_id = $request->DL_id;

        $bill = Bill::where('HD_id', '=', $id)
        ->update([
            'HD_tratruoc' =>  $bill->HD_tratruoc,
            'HD_active' => $bill->HD_active,
            'DL_id' => $bill->DL_id,
            
        ]);
        return redirect('nhanvien/thanhtoan')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        return redirect('nhanvien/thanhtoan')->with('success', 'Đã xóa thành công!');
    }
}
