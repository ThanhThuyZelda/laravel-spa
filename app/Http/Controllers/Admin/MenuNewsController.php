<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
use App\Models\News;

class MenuNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tb_news')
        ->join('tb_staff', 'tb_staff.NV_id', '=', 'tb_news.NV_id')
        ->orderBy('tb_news.TT_id', 'asc')
        ->paginate(5);

        if($key = request()->key){
            $data = DB::table('tb_news')
            ->join('tb_staff', 'tb_staff.NV_id', '=', 'tb_news.NV_id')
            ->orderBy('tb_news.TT_id', 'asc')
            ->where('TT_name','like', '%'.$key.'%')->paginate(5);
        }
        return view('admin.menu.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staff::all();

        return view('admin.menu.news.create', compact('staff'));
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
            'TT_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'TT_name' => 'required',
            'TT_des' => 'required',
            'TT_content' => 'required',
            'NV_id' => 'required',
            
        ]);
        
        $news = new News();

        
        $fileName = time().$request->file('TT_img')->getClientOriginalName();
        $path = $request->file('TT_img')->storeAs('images', $fileName, 'public');
        $requestData["TT_img"] = '/storage/'.$path;    
        
        
        $news->TT_img = $fileName;
        $news->TT_name = $request->TT_name;
        $news->TT_des = $request->TT_des;
        $news->TT_content = $request->TT_content;
        $news->NV_id = $request->NV_id;    
        $news->save();
        // return redirect('admin/menu/room');
        return redirect('admin/menu/news')->with('success', 'Thêm bài viết thành công!');
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
        $news = News::find($id);
        $staff = Staff::all();
       
        return view('admin.menu.news.edit', compact('news','staff'));
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
        $news = new News();

        
     //   $input = $request->all();
        $fileName = time().$request->file('TT_img')->getClientOriginalName();
        $path = $request->file('TT_img')->storeAs('images', $fileName, 'public');
        $input["TT_img"] = '/storage/'.$path;    
        
        
        $news->TT_img = $fileName;
        $news->TT_name = $request->TT_name;
        $news->TT_des = $request->TT_des;
        $news->TT_content = $request->TT_content;
        $news->NV_id = $request->NV_id;
           
        // return redirect('admin/menu/room');
        $news = News::where('TT_id', '=', $id)
                    ->update([
                        'TT_img' => $news->TT_img,
                        'TT_name' => $news->TT_name,
                        'TT_des'=> $news->TT_des,
                        'TT_content' => $news->TT_content,
                        'NV_id' => $news->NV_id
                    ]);


        return redirect('admin/menu/news')->with('success', 'Câp nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('admin/menu/news')->with('success', 'Đã xóa thành công!');
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
