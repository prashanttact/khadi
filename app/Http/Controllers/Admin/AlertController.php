<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin\Alerts;
use Session;
use Auth;
use DB;
use validator;
use File;
use App\Http\Controllers\Admin\Resize_Image;
use Helper;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['page'] = 'View ALerts';
        $data['template'] = 'admin/alert/view';
        $data['results'] = Alerts::all();
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['page'] = 'Add Alert';
        $data['template'] = 'admin/alert/add';
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
            'description' => 'required',
            'date' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif',     
        ]);

        $date= date('Y-m-d', strtotime($_POST['date']));
        // $date= date('Y-m-d H:i:s', strtotime($_POST['date']));
        // date('Y-m-d H:i:s');
       
        $file_dimension=getimagesize($_FILES['image']['tmp_name']);
        $image_size = $request->file('image')->getClientSize();

        if((($file_dimension['0']!='105')&&($file_dimension['0']<'105')) || (($file_dimension['1']!='105')&&($file_dimension['0']<'105')))
        {
            Session::flash('error', 'image dimensions should be (105X105)! or more');
            return redirect('add-alert')->withInput();          
        }
        else
        {   
            if($image_size > 2048575)
            {
                Session::flash('error', 'image size should be less than 2MB!');        
                return redirect('add-alert')->withInput();
            }

            $data = array(

            'alert_desc' => $request->description,
            'alert_date'=> $date,
            'alert_image' => 'image'
            );       

            $alert = Alerts::create($data);
            $extension = $request->image->extension();
            //$image_name2= $alert->id.'.'.$extension;
            $rand = Str::random(5);
            $image_name2= $rand.'.'.$extension;

            $im = $request->file('image')->move(public_path("/frontend/kscl/assets/img/alerts"), $image_name2);

            $image = new Resize_Image;

            //$image->new_height = 100;
            $image->new_width = 400;
            $image->image_to_resize = public_path('frontend/kscl/assets/img/alerts').'/'.$image_name2; 
            $image->ratio = true; 
            $image->new_image_name = $alert->id;
            $image->save_folder = public_path('frontend/kscl/assets/img/alerts/');
            $process = $image->resize();
            $img_upload = Alerts::where('id', $alert->id)->update(array('alert_image' => $image_name2));    
            if($img_upload) 
            {
                Session::flash('success', 'Alert Added Successfully.');
                return redirect('view-alert');

            } 
            else 
            {
                Session::flash('error', 'Something went wrong.');
                return redirect('view-alert/'.$request->id);
            } 
        }         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function show(Alerts $alerts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data['page'] = 'Edit Alert';
        $data['template'] = 'admin/alert/edit';
        $data['results'] = Alerts::find($request->id);

        //if(count($data['results'])>0)
        if($data['results'])
        {
            return view('admin/includes/page', compact('data'));    
        }
        else
        {
            return redirect('view-alert');
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alerts $alert)
    {
        
        $this->validate($request, [
            'description' => 'required',
            'date' => 'required',
            'image' => 'mimes:jpg,png,jpeg,gif',
            
        ]);

        $date= date('Y-m-d', strtotime($_POST['date']));
        // $date= date('Y-m-d H:i:s', strtotime($_POST['date']));

        $data = array(
            'alert_desc' => $request->description,
            'alert_date' => $date
            );

        if($request->file('image')) 
        {
            $file_dimension=getimagesize($_FILES['image']['tmp_name']);
            $image_size = $request->file('image')->getClientSize();

            if((($file_dimension['0']!='105')&&($file_dimension['0']<'105')) || (($file_dimension['1']!='105')&&($file_dimension['0']<'105')))
            {
                Session::flash('error', 'image dimensions should be (105X105)! or more');
                return redirect('view-alert')->withInput();          
            }
            else
            {    
                if($image_size > 2048575)
                {
                    Session::flash('error', 'image size should be less than 2MB!');        
                    return redirect('view-alert',['id'=> $request->id]);
                }

                if($alert = Alerts::where('id', $request->id)->get(['alert_image'])->first()) 
                {
                    $alert_path = $alert->alert_image;
                    unlink('frontend/kscl/assets/img/alerts/'.$alert_path);
                } 

                $extension = $request->image->extension();
                //$image_name2= $request->id.'.'.$extension;
                $rand = Str::random(5);
                $image_name2= $rand.'.'.$extension;

                $image_url='frontend/kscl/assets/img/alerts/'.$image_name2;
                if(File::exists($image_url))
                {
                    File::delete($image_url);
                } 
                $request->file('image')->move(public_path("/frontend/kscl/assets/img/alerts/"), $image_name2);
                $image = new Resize_Image;
                //$image->new_height = 100;
                $image->new_width = 400;
                $image->image_to_resize = public_path('frontend/kscl/assets/img/alerts').'/'.$image_name2; 
                $image->ratio = true; 
                $image->new_image_name = $request->id;
                $image->save_folder = public_path('frontend/kscl/assets/img/alerts/');
                $process = $image->resize();
                $data['alert_image'] =  $image_name2;
            }
        }    

        if(Alerts::where('id', $request->id)->update($data)) 
        {
            Session::flash('success', 'Alert Updated Successfully.');
            return redirect('view-alert');
        } 
        else 
        {
            Session::flash('error', 'Something went wrong.');
            return redirect('view-alert', ['id' => $request->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $img = Alerts::where('id', $request->id)->get(['alert_image'])->first();
        $img = $img->alert_image;
        
        $image_url='frontend/kscl/assets/img/alerts/'.$img;
        
        if(File::exists($image_url))
        {
            File::delete($image_url);
        }

        Alerts::find($request->id)->delete();
        Session::flash('success', 'Alert Deleted Successfully.');
        return redirect('view-alert');  
    }
}
