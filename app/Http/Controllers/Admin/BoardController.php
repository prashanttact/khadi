<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin\Boards;
use Session;
use Auth;
use DB;
use validator;
use File;
use App\Http\Controllers\Admin\Resize_Image;

class BoardController extends Controller
{
    public function boardList()
    {
        $data['page'] = 'View Boards';
        $data['template'] = 'admin/board/view';
        $data['results'] = Boards::orderBy('id', 'desc')->get();
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page'] = 'Add Boards';
        $data['template'] = 'admin/board/add';
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:2000'
            ]);

        $data = array(
            'board_name' => $request->name,
            'board_title' => $request->title,
            'board_images' => 'image' 
            );       
      
        $boards = Boards::create($data);
        $extension = $request->image->extension();
        //$image_name= $boards->id.'.'.$extension;
        $rand = Str::random(5);
        $image_name= $rand.'.'.$extension;

        $im = $request->file('image')->move(public_path("/frontend/kscl/assets/img/boards/"), $image_name);

        $image = new Resize_Image;

        $image->new_height = 250;

        $image->new_width = 300;

        $image->image_to_resize = public_path('frontend/kscl/assets/img/boards').'/'.$image_name; 

        //$image->ratio = true; 

        $image->new_image_name = $boards->id;

        $image->save_folder = public_path('frontend/kscl/assets/img/boards/');

        $process = $image->resize();

        $img_upload = Boards::where('id', $boards->id)->update(array('board_images' => $image_name));

        if($img_upload) 
        {
            Session::flash('success', 'Board of Directors Added Successfully.');
            return redirect('manage-boards');
        } 
        else 
        {
            Session::flash('error', 'Something went wrong.');
            return redirect('manage-boards');
        }
    }      
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Boards  $boards
     * @return \Illuminate\Http\Response
     */
    public function show(Boards $boards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boards  $boards
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data['page'] = 'Edit Boards';
        $data['template'] = 'admin/board/edit';
        $data['results'] = Boards::find($request->id);
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boards  $boards
     * @return \Illuminate\Http\Response
     */
   

     public function update(Request $request, Boards $boards)
    {
         $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            //'image' => 'mimes:jpg,png,jpeg,gif|max:2000'
            ]);

        if($request->file('image')) 
        {
            $extension = $request->image->extension();
            //$image_name= $request->id.'.'.$extension;
            $rand = Str::random(5);
            $image_name= $rand.'.'.$extension;

            $image_url='frontend/kscl/assets/img/boards/'.$image_name;

            if(File::exists($image_url))
            {
                File::delete($image_url);
            }

            $request->file('image')->move(public_path("/frontend/kscl/assets/img/boards/"), $image_name);

            $image = new Resize_Image;

            $image->new_height = 250;

            $image->new_width = 300;

            $image->image_to_resize = public_path('frontend/kscl/assets/img/boards').'/'.$image_name; 

            //$image->ratio = true; 

            $image->new_image_name = $request->id;

            $image->save_folder = public_path('frontend/kscl/assets/img/boards/');

            $process = $image->resize();

            $data = array(
                'board_name' => $request->name,
                'board_title' => $request->title,
                'board_images' => $image_name
            );
        } 
        else 
        {
            $data = array(
                'board_name' => $request->name,
                'board_title' => $request->title,
            );
        }

        if(Boards::where('id', $request->id)->update($data)) 
        {
            Session::flash('success', 'Board of Directors Updated Successfully.');
            return redirect('manage-boards');
        } 
        else 
        {
            Session::flash('error', 'Something went wrong.');
            return redirect('manage-boards', ['id' => $request->id]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boards  $boards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $img = Boards::where('id', $request->id)->get(['board_images'])->first();
        $img = $img->board_images;
        
        $image_url='frontend/kscl/assets/img/boards/'.$img;
        
        if(File::exists($image_url))
        {
            File::delete($image_url);
        }

        Boards::find($request->id)->delete();
        Session::flash('success', 'Board of Director Deleted Successfully.');
        return redirect('manage-boards');  
    }
}