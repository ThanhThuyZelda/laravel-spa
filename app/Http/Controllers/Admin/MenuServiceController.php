<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\TypeService;

class MenuServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_service')
        ->join('tb_service_type', 'tb_service_type.type_id', '=', 'tb_service.type_id')
        ->orderBy('tb_service.DV_id', 'asc')
        ->paginate(2);
        if($key = request()->key){
            $data = DB::table('tb_service')
            ->join('tb_service_type', 'tb_service_type.type_id', '=', 'tb_service.type_id')
            ->orderBy('tb_service.DV_id', 'asc')
            ->where('DVs_name','like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.menu.service.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeService = TypeService::all();

        return view('admin.menu.service.create', compact('typeService'));
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
            'DV_name' => 'required',
            'Dv_gia' => 'required',
            //'nd' => 'required',
            'type_id' => 'required'
            

        ]);
        $service = new Service();
        $service->DV_name = $request->DV_name;
        $service->Dv_gia = $request->Dv_gia;
        $service->DV_mota = $request->DV_mota;
        $service->DV_nd = $request->DV_nd;
        $service->type_id = $request->type_id;     
        $service->save();
        return redirect('admin/menu/service')->with('success', 'Thêm dịch vụ thành công!');

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
        $service = Service::find($id);
        $typeService = TypeService::all();
       
        return view('admin.menu.service.edit', compact('service','typeService'));
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
        $service = new Service();

        $service->DV_name = $request->DV_name;
        $service->Dv_gia = $request->Dv_gia;
        $service->DV_mota = $request->DV_mota;
        $service->DV_nd = $request->DV_nd;
        $service->type_id = $request->type_id;

        $service = Service::where('DV_id', '=', $id)
        ->update([
            'DV_name' =>  $service->DV_name,
            'Dv_gia' => $service->Dv_gia,
            'DV_mota' => $service->DV_mota,
            'DV_nd' => $service->DV_nd,
            'type_id' => $service->type_id,
        ]);
        return redirect('admin/menu/service')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('admin/menu/service')->with('success', 'Đã xóa thành công!');
    }

    public function uploadImage(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'),$fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset-utf-8');
            

            echo $response;

        }
    }
}
