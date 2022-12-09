<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Room;
use App\Models\Position;
use Illuminate\Support\Facades\DB;

class MenuStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $data = DB::table('tb_staff')
        ->join('tb_room', 'tb_room.room_id', '=', 'tb_staff.room_id')
        ->join('tb_position', 'tb_position.CV_id', '=', 'tb_staff.CV_id')
        ->orderBy('tb_staff.NV_id', 'asc')
        ->paginate(5);
        return view('admin.menu.staff1.index', compact('data'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = Room::all();
        $position = Position::all();

        return view('admin.menu.staff1.create', compact('room', 'position'));
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
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
            'gender' => 'required',
            'phone' => 'required',
            'room_id' => 'required',
            'CV_id' => 'required',
            
        ]);
        
        $staff = new Staff();

        
        $fileName = time().$request->file('avatar')->getClientOriginalName();
        $path = $request->file('avatar')->storeAs('images', $fileName, 'public');
        $requestData["avatar"] = '/storage/'.$path;    
        
        
        $staff->avatar = $fileName;
        $staff->fullname = $request->fullname;
        $staff->email = $request->email;
        $staff->password = $request->password;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->room_id = $request->room_id;
        $staff->CV_id = $request->CV_id;     
        $staff->save();
        // return redirect('admin/menu/room');
        return redirect('admin/menu/staff1')->with('success', 'Thêm nhân viên thành công!');
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
        $staff = Staff::find($id);
        $room = Room::all();
        $position = Position::all();
       
        return view('admin.menu.staff1.edit', compact('staff','room', 'position'));
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
        $staff = new Staff();

        
     //   $input = $request->all();
        $fileName = time().$request->file('avatar')->getClientOriginalName();
        $path = $request->file('avatar')->storeAs('images', $fileName, 'public');
        $input["avatar"] = '/storage/'.$path;    
        
        
        $staff->avatar = $fileName;
        $staff->fullname = $request->fullname;
        $staff->email = $request->email;
        $staff->password = $request->password;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->room_id = $request->room_id;

        $staff->CV_id = $request->CV_id;     
        // return redirect('admin/menu/room');
        $staff = Staff::where('NV_id', '=', $id)
                    ->update([
                        'avatar' => $staff->avatar,
                        'fullname' => $staff->fullname,
                        'email' => $staff->email,
                        'password'=> $staff->password,
                        'gender' => $staff->gender,
                        'phone' => $staff->phone,
                        'room_id' => $staff->room_id,
                        'CV_id' => $staff->CV_id 
                    ]);


        return redirect('admin/menu/staff1')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('admin/menu/staff1')->with('success', 'Đã xóa thành công!');
    }
}
