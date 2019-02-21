<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Admin\Faq;
use App\Admin\Category;
use Session;
use Auth;
use DB;
use validator;
use File;
use App\Http\Controllers\Admin\Resize_Image;
use Helper;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['page'] = 'View Faqs';
        $data['template'] = 'admin/faqs/view';
        $data['results'] = Faq::orderBy('id', 'desc')->get();
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page'] = 'Add Faqs';
        $data['template'] = 'admin/faqs/add';
        $data['category_list']=Category::all();
        //return $data;
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
        //return $request;
        $this->validate($request, [
            'faq_question' => 'required',
            'faq_answer' => 'required',
            'faq_category'=>'required',
            //'date' => 'required',
            //'image' => 'required|mimes:jpg,png,jpeg,gif',#|dimensions:height=302,width=175
            //'pdf' => 'mimes:pdf'
            
        ]);

         $data = array(

            'faq_question' => $request->faq_question,
            'faq_answer' => $request->faq_answer,
            'category_id'=>$request->faq_category,
            
            );       

            $faqs = Faq::create($data);

            if($faqs) 
            { 
                Session::flash('success', 'Faq Added Successfully.');
                //$test=Faq::find(2);
                //return $test->faq_question;
                return redirect('view-faq');
            }
        // print_r($request->date);
        // die();
        //$date= date('Y-m-d', strtotime($_POST['date']));


        //$file_dimension=getimagesize($_FILES['image']['tmp_name']);
        //$image_size = $request->file('image')->getClientSize();

        // if((($file_dimension['0']!='302')&&($file_dimension['0']<'302')) || (($file_dimension['1']!='175')&&($file_dimension['0']<'175')))
        // {
        //     Session::flash('error', 'image dimensions should be (302X175)! or more');
        //     return redirect('add-news')->withInput();          
        // }
        // else
        // {   
        //     if($image_size > 2048575)
        //     {
        //         Session::flash('error', 'image size should be less than 2MB!');        
        //         return redirect('add-news')->withInput();
        //     }  

        //     $data = array(

        //     'news_title' => $request->title,
        //     'news_desc' => $request->description,
        //     'news_date'=> $date,
        //     'news_img_path' => 'image'
        //     );       

        //     $news = News::create($data);
        //     $extension = $request->image->extension();
        //     $rand = Str::random(5);
        //     $image_name2= $rand.'.'.$extension;

        //     $im = $request->file('image')->move(public_path("/frontend/kscl/assets/img/news"), $image_name2);
            
        //     $image = new Resize_Image;
        //     //$image->new_height = 100;
        //     $image->new_width = 400;
        //     $image->image_to_resize = public_path('frontend/kscl/assets/img/news').'/'.$image_name2; 
        //     $image->ratio = true; 
        //     $image->new_image_name = $news->id;
        //     $image->save_folder = public_path('frontend/kscl/assets/img/news/');
        //     $process = $image->resize();
        //     $img_upload = News::where('id', $news->id)->update(array('news_img_path' => $image_name2));
        //     // if($request->file('pdf')){
        //     // $extension = $request->pdf->extension();
        //     // $image_name= Helper::getFileName($request->pdf->getClientOriginalName())."-".$news->id.'.'.$extension;
        //     // $im = $request->file('pdf')->move(public_path("/uploads/newspdf/"), $image_name);

        //     // $img_upload = News::where('id', $news->id)->update(array('news_pdf' => $image_name));
        //     // }

        //     if($img_upload) 
        //     { 
        //         Session::flash('success', 'News Added Successfully.');
        //         return redirect('view-news');
        //     } 
        //     else 
        //     {
        //         Session::flash('error', 'Something went wrong.');
        //         return redirect('view-news/'.$request->id);
        //     }
        // }      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data['page'] = 'Edit Faq';
        $data['template'] = 'admin/faqs/edit';
        $data['results'] = Faq::find($request->id);
        $category_obj=Category::all();
        //return $category;

        //if(count($data['results'])>0)
        if($data['results'])
        {
            return view('admin/includes/page', compact('data','category_obj'));    
        }
        else
        {
            return redirect('view-faq');
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //return $request;
        $this->validate($request, [
            'faq_question' => 'required',
            'faq_answer' => 'required',
            'category'=>'required',
            
            //'pdf' => 'mimes:pdf'

        ]);

        //$date= date('Y-m-d', strtotime($_POST['date']));

        $data = array(
            'faq_question' => $request->faq_question,
            'faq_answer' => $request->faq_answer,
            'category_id'=>$request->category,
            
            );


        // if($request->file('image')) 
        // {  
        //     $file_dimension=getimagesize($_FILES['image']['tmp_name']);
        //     $image_size = $request->file('image')->getClientSize();

        //     if((($file_dimension['0']!='302')&&($file_dimension['0']<'302')) || (($file_dimension['1']!='175')&&($file_dimension['0']<'175')))
        //     {
        //         Session::flash('error', 'image dimensions should be (302X175)! or more');
        //         return redirect('view-news')->withInput();          
        //     }
        //     else
        //     {    
        //         if($image_size > 2048575)
        //         {
        //             Session::flash('error', 'image size should be less than 2MB!');        
        //             return redirect('view-news',['id'=> $request->id]);
        //         }

        //         if($news = News::where('id', $request->id)->get(['news_img_path'])->first()) 
        //         {
        //             $news_path = $news->news_img_path;
        //             unlink('frontend/kscl/assets/img/news/'.$news_path);
        //         }  

        //         $extension = $request->image->extension();
        //         //$image_name2= $request->id.'.'.$extension;
        //         $rand = Str::random(5);
        //         $image_name2= $rand.'.'.$extension;


        //         $image_url='frontend/kscl/assets/img/news/'.$image_name2;

        //         if(File::exists($image_url))
        //         {
        //             File::delete($image_url);
        //         }

        //         $request->file('image')->move(public_path("/frontend/kscl/assets/img/news/"), $image_name2);
        //         $image = new Resize_Image;

        //         //$image->new_height = 100;
        //         $image->new_width = 400;
        //         $image->image_to_resize = public_path('frontend/kscl/assets/img/news').'/'.$image_name2; 
        //         $image->ratio = true; 
        //         $image->new_image_name = $request->id;
        //         $image->save_folder = public_path('frontend/kscl/assets/img/news/');
        //         $process = $image->resize();
        //         $data['news_img_path'] =  $image_name2;
        //     }           
        // }

        // if($request->file('pdf')){


        //         $extension = $request->pdf->extension();
        //         $image_name= Helper::getFileName($request->pdf->getClientOriginalName())."-".$request->id.'.'.$extension;
        //         $image_url='uploads/newspdf/'.$image_name;

        //         if(File::exists($image_url))
        //         {
        //             File::delete($image_url);
        //         }

        //         $request->file('pdf')->move(public_path("/uploads/newspdf/"), $image_name);

        //         $data['news_pdf'] = $image_name;

        // }

        
        if(Faq::where('id', $request->id)->update($data)) 
        {
            Session::flash('success', 'FAQ Updated Successfully.');
            return redirect('view-faq');
        }
        
        else 
        {
            Session::flash('error', 'Something went wrong.');
            return redirect('view-news', ['id' => $request->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $img = Faq::where('id', $request->id)->get(['news_img_path'])->first();
        // $img = $img->news_img_path;

        // $image_url='frontend/kscl/assets/img/news/'.$img;

        // if(File::exists($image_url))
        // {
        //     File::delete($image_url);
        // }

        //$img = News::where('id', $request->id)->get(['news_pdf'])->first();
        //$img = $img->news_pdf;
        
        //$image_url='uploads/newspdf/'.$img;
        
        // if(File::exists($image_url))
        // {
        //     File::delete($image_url);
        // }

        Faq::find($request->id)->delete();
        Session::flash('success', 'FAQ Deleted Successfully.');
        return redirect('view-faq');  
    }

    public function changeStatus(Request $request)
    {
        $id = $request->id;
        $val = ($request->status == "Active" ? "Inactive" : "Active");
        $data = array('faq_status' => $val);
            
        $res = Faq::find($id)->update($data);

        if ($res) {
            //echo $val;
            if($val=="Active")
            {
                $val="Active";
            }
            else if($val=="Inactive")
            {
                $val = "Inactive";
            }
            $json = array('status' => 'success', 'response' => $val);
                echo json_encode($json);
        }
    }

  //      public function UplaodPdfDelete(Request $request){

  //       $img = News::where('id', $request->id)->get(['news_pdf'])->first();
  //       $img = $img->news_pdf;
  //       $image_url='uploads/newspdf/'.$img;
        
  //       if(File::exists($image_url))
  //       {
  //           File::delete($image_url);
  //       }
       
  //       News::where('id', $request->id)->update(array('news_pdf'=>''));
  //       Session::flash('success', 'Document Deleted Successfully.');
  //       return redirect('view-news');  

  // }

}
