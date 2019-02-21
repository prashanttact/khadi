<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin\Gallery;
use Session;
use Auth;
use DB;
use validator;
use File;
use App\Http\Controllers\Admin\Resize_Image;
use Helper;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['page'] = 'View Gallery';
        $data['template'] = 'admin/gallery/view';
        $data['results'] = Gallery::orderBy('id', 'desc')->get();
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page'] = 'Add Gallery';
        $data['template'] = 'admin/gallery/add';
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
            //'category' => 'required',
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif',
        ]);
        
        $data = array(
            //'category' => $request->category,
            'image_title' => $request->title,
            'gallery_image' => 'image'
            );       
        
       
        $gallery = Gallery::create($data);
        $extension = $request->image->extension();
        $rand = Str::random(5);
        $image_name2= $rand.'.'.$extension;

        $im = $request->file('image')->move(public_path("/frontend/kscl/assets/img/gallery"), $image_name2);

        $image = new Resize_Image;

        //$image->new_height = 100;

        $image->new_width = 400;
        $image->image_to_resize = public_path('frontend/kscl/assets/img/gallery').'/'.$image_name2; 
        $image->ratio = true; 
        $image->new_image_name = $gallery->id;
        $image->save_folder = public_path('frontend/kscl/assets/img/gallery/');
        $process = $image->resize();
        $img_upload = Gallery::where('id', $gallery->id)->update(array('gallery_image' => $image_name2));
        if($img_upload)
        { 
            Session::flash('success', 'Gallery Image Added Successfully.');
            return redirect('view-gallery');
        } 
        else 
        {
            Session::flash('error', 'Something went wrong.');
            return redirect('view-gallery/'.$request->id);
        }      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data['page'] = 'Edit Gallery';
        $data['template'] = 'admin/gallery/edit';
        $data['results'] = Gallery::find($request->id);

        //if(count($data['results'])>0)
        if($data['results'])
        {
            return view('admin/includes/page', compact('data'));    
        }
        else
        {
            return redirect('view-gallery');
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            //'category' => 'required',
            'title' => 'required',
            'image' => 'mimes:jpg,png,jpeg,gif',
        ]);

        $data = array(
            //'category' => $request->category,
            'image_title' => $request->title,
            );

        if($request->file('image')) 
        {  
            $file_dimension=getimagesize($_FILES['image']['tmp_name']);
            $image_size = $request->file('image')->getClientSize();

            if($image_size > 2048575)
            {
                Session::flash('error', 'image size should be less than 2MB!');        
                return redirect('view-gallery',['id'=> $request->id]);
            }

            $extension = $request->image->extension();
            $rand = Str::random(5);
            $image_name2= $rand.'.'.$extension;

            $image_url='frontend/kscl/assets/img/gallery/'.$image_name2;

            if(File::exists($image_url))
            {
                File::delete($image_url);
            }
            $request->file('image')->move(public_path("/frontend/kscl/assets/img/gallery/"), $image_name2);

            $image = new Resize_Image;

            //$image->new_height = 100;
            $image->new_width = 400;
            $image->image_to_resize = public_path('frontend/kscl/assets/img/gallery').'/'.$image_name2; 
            $image->ratio = true; 
            $image->new_image_name = $request->id;
            $image->save_folder = public_path('frontend/kscl/assets/img/gallery/');
            $process = $image->resize();
            $data['gallery_image'] =  $image_name2;
        }

        if(Gallery::where('id', $request->id)->update($data)) 
        {
            Session::flash('success', 'Gallery Updated Successfully.');
            return redirect('view-gallery');

        } 
        else 
        {           
            Session::flash('error', 'Something went wrong.');
            return redirect('view-gallery', ['id' => $request->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $img = Gallery::where('id', $request->id)->get(['gallery_image'])->first();
        $img = $img->gallery_image;
        
        $image_url='frontend/kscl/assets/img/gallery/'.$img;
        
        if(File::exists($image_url))
        {
            File::delete($image_url);
        }

        Gallery::find($request->id)->delete();
        Session::flash('success', 'Gallery Deleted Successfully.');
        return redirect('view-gallery');  
    }
}
