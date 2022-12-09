<?php

namespace App\Http\Controllers\NhanVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Advise;

class TuVanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_advise')
        ->join('tb_service', 'tb_service.DV_id', '=', 'tb_advise.DV_id')
        ->orderBy('tb_advise.TV_id', 'asc')
        ->paginate(5);
        return view('nhanvien.tuvan.index', compact('data'));
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
        $advise = Advise::find($id);
        $service = Service::all();
       
        return view('nhanvien.tuvan.edit', compact('advise','service'));
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
        $advise = new Advise();
        $advise->TV_hoten = $request->TV_hoten;
        $advise->TV_sdt = $request->TV_sdt;
        $advise->TV_ttd = $request->TV_ttd;
        $advise->TV_active = $request->TV_active; 
        $advise->DV_id = $request->DV_id;  

        $advise = Advise::where('TV_id', '=', $id)
        ->update([
            'TV_hoten' =>  $advise->TV_hoten,
            'TV_sdt' => $advise->TV_sdt,
            'TV_ttd' => $advise->TV_ttd,
            'TV_active' => $advise->TV_active,
            'DV_id' => $advise->DV_id,

        ]);
        return redirect('nhanvien/tuvan')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advise = Advise::find($id);
        $advise->delete();
        return redirect('nhanvien/tuvan')->with('success', 'Đã xóa thành công!');
    }
}
