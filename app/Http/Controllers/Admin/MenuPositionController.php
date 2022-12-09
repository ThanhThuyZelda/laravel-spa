<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::table('tb_position')->orderBy('CV_id', 'asc')->paginate(5);
        if($key = request()->key){
            $data = DB::table('tb_position')->orderBy('CV_id', 'asc')
            ->where('CV_name','like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.menu.position.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.position.create');
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
            'CV_name' => 'required'
        ]);
        $CV = new Position();
        $CV->CV_name = $request->CV_name;
        $CV->save();
        return redirect('admin/menu/position')->with('success', 'Thêm chức vụ mới thành công!');
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
        $CV = Position::find($id);
       
        return view('admin.menu.position.edit')->with('CV', $CV);
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
        $room = Position::where('CV_id', '=', $id)
                    ->update([
                        'CV_name' => $request->CV_name
                    ]);
        return redirect('admin/menu/position')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Position::find($id);
        $room->delete();
        return redirect('admin/menu/position')->with('success', 'Đã xóa thành công!');
    }
}
