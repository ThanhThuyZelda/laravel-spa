<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;

class MenuFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_feedback')
        ->orderBy('tb_feedback.PH_id', 'asc')
        ->paginate(3);
        
        if($key = request()->key){
            $data = DB::table('tb_feedback')
            ->orderBy('tb_feedback.PH_id', 'asc')
            ->where('PH_fullname','like', '%'.$key.'%')->paginate(5);
        };
        return view('admin.menu.feedback.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.feedback.create');
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
            'PH_fullname' => 'required',
            'PH_service' => 'required',
          //  'PH_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
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
        return redirect('/admin/menu/feedback')->with('success', 'Gửi phản hồi thành công!');
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
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect('admin/menu/feedback')->with('success', 'Đã xóa thành công!');
    }
}
