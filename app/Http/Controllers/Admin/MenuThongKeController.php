<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\Bill;
use App\Models\Staff;



class MenuThongKeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
