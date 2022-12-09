<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TypeService;

class MenuTypeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_service_type')->orderBy('type_id', 'asc')->paginate(5);
        if($key = request()->key){
            DB::table('tb_service_type')->orderBy('type_id', 'asc')
            ->where('type_name','like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.menu.service_type.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.service_type.create');
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
            'type_name' => 'required'
        ]);
        $type = new TypeService();
        $type->type_name = $request->type_name;
        $type->save();
        // return redirect('admin/menu/room');
        return redirect('admin/menu/service_type')->with('success', 'Thêm phòng mới thành công!');
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
        $type = TypeService::find($id);
       
       return view('admin.menu.service_type.edit')->with('type', $type);
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
        $type = TypeService::where('type_id', '=', $id)
                    ->update([
                        'type_name' => $request->type_name
                    ]);
        return redirect('admin/menu/service_type')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = TypeService::find($id);
        $type->delete();
        return redirect('admin/menu/service_type')->with('success', 'Đã xóa thành công!');
    }
}
