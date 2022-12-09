<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Room::get();
        $data = DB::table('tb_room')->orderBy('room_id', 'asc')->paginate(5);
        if($key = request()->key){
            $data = DB::table('tb_room')->orderBy('room_id', 'asc')
            ->where('room_name','like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.menu.room.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.room.create');
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
            'room_name' => 'required'
        ]);
        $room = new Room();
        $room->room_name = $request->room_name;
        $room->save();
        // return redirect('admin/menu/room');
        return redirect('admin/menu/room')->with('success', 'Thêm phòng mới thành công!');
       
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
        $room = Room::find($id);
        
       
       return view('admin.menu.room.edit')->with('room', $room);
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
        $room = Room::where('room_id', '=', $id)
                    ->update([
                        'room_name' => $request->room_name
                    ]);
        return redirect('admin/menu/room')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('admin/menu/room')->with('success', 'Đã xóa thành công!');
    }

    public function searchRoom(Request $request){
        $search = $_GET['query'];
        $room = Room::where('room_name', 'LIKE', '%'.$search.'%')->with('data')->get();

        return view('admin.menu.room.search', compact('room'));
    }
}
