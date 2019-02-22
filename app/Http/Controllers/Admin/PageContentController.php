<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Admin\PageContent;
use App\Admin\Boards;
use Illuminate\Http\Request;
Use App\Admin\FaqQuestions;
use Session;
use Auth;
use DB;
use validator;
use File;
//use Illuminate\Support\Str;

class PageContentController extends Controller
{
    /*public function __construct() {
        print_r($_POST);exit;
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = 'View PageContent';
        $data['template'] = 'admin/page/view';
        $data['results'] = PageContent::all();

        //echo Str::random();
        //echo Str::random(5);
        //die();
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function show(PageContent $pageContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data['page'] = 'Edit PageContent';
        $data['template'] = 'admin/page/edit';
         
        $data['results'] = PageContent::find($request->id);
        $data['slug']= $data['results']['slug'];

        if($data['results']['slug']=='homepage')
        {
            $data['template'] ='admin/page/homepage';
            $data['results'] = DB::table('pages')
                                    ->leftJoin('home_page_content', 'pages.id', '=', 'home_page_content.page_id')
                                    ->where('home_page_content.page_id', '=', 9)->get()->first();
            // print_r($data['results']->id);
            // die();   

            $data['board_directors'] = DB::table('board_of_directors')
                                            ->get()->all();

            $data['news'] = DB::table('news')
                                ->get()->all();
                                           
            $data['alerts'] = DB::table('alert')
                                    ->get()->all();  
                                    
            $data['gallery'] = DB::table('gallery')
                                    ->get()->all(); 
            
            $data['gallery_random'] = DB::table('gallery')
                                        ->inRandomOrder()
                                        ->get()->take(4)->all();

            // print_r($data['gallery_random']);
            // die(); 
                                     

            return view('admin/includes/page', compact('data'));
        }


        if($data['results']['slug']=='contact-us')
        {
            $data['template'] ='admin/page/contactus';
            $data['results'] = DB::table('pages')
                                ->leftJoin('contact_us_content', 'pages.id', '=', 'contact_us_content.page_id')
                                ->where('contact_us_content.page_id', '=', 2)->get()->first();
            return view('admin/includes/page', compact('data'));
        }

        if($data['results']['slug']=='disclaimer')
        {
            $data['template'] ='admin/page/disclaimer';
            $data['results'] = DB::table('pages')
                                ->leftJoin('disclaimer', 'pages.id', '=', 'disclaimer.page_id')
                                ->where('disclaimer.page_id', '=', 5)->get()->first();
            return view('admin/includes/page', compact('data'));
        }

        if($data['results']['slug']=='privacy-policy')
        {
            $data['template'] ='admin/page/privacy_policy';
            $data['results'] = DB::table('pages')
                                ->leftJoin('privacy_policy', 'pages.id', '=', 'privacy_policy.page_id')
                                ->where('privacy_policy.page_id', '=', 6)->get()->first();
            return view('admin/includes/page', compact('data'));
        }


        if($data['results']['slug']=='terms-condition')
        {
            $data['template'] ='admin/page/terms_condition';
            $data['results'] = DB::table('pages')
                                ->leftJoin('terms_condition', 'pages.id', '=', 'terms_condition.page_id')
                                ->where('terms_condition.page_id', '=', 7)->get()->first();
            return view('admin/includes/page', compact('data'));
        }




        if($data['results']['slug']=='faq')
        {
            $data['template'] ='admin/page/faq';
            //$data['results'] = FaqQuestions::all();
            
            $data['results'] = DB::table('pages')
                                ->leftJoin('faq_questions', 'pages.id', '=', 'faq_questions.page_id')
                                ->where('faq_questions.page_id', '=', 4)->get()->first();
            // print_r($data['results']);
            // die();   

            $data['faq'] = DB::table('faq_questions')
                                    ->get()->all();                         
            // print_r($data['faq']);
            // die(); 
                                   
            return view('admin/includes/page', compact('data'));


        }


        if($data['results']['slug']=='about-us')
        {
            $data['template'] ='admin/page/aboutus';
            $data['results'] = DB::table('pages')
                                    ->leftJoin('about_us_page_content', 'pages.id', '=', 'about_us_page_content.page_id')
                                    ->where('about_us_page_content.page_id', '=', 1)->get()->first();
            return view('admin/includes/page', compact('data'));
        }
        return view('admin/includes/page', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return back()->with('success', 'Page content updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageContent  $pageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageContent $pageContent)
    {
        //
    }

    public function update_status(Request $request)
    {
        PageContent::where('id', $request->row_id)->update(array('status' => $request->status));
        $response = array(
            'status' => 'success',
            'msg' => "Page Status Updated"
        );
        return response()->json($response);
    }
    
    public function homePageContent(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Please provide content!');
        }

        $id = $request->id;
        $contentId = $request->contentId;
        $content = $request->content;
           
        DB::table('home_page_content')
                ->where('page_id', $id)
                ->update(array($contentId=>$content));
      
        return back()->with('success', 'Home Page content updated successfully!');

    }
    
    public function aboutusPageContent(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Please provide content!');
        }

        $id = $request->id;
        $contentId = $request->contentId;
        $content = $request->content;

        DB::table('about_us_page_content')
            ->where('page_id', $id)
            ->update(array($contentId=>$content));

        return back()->with('success', 'About Us Page content updated successfully!');
    }

    public function updateContactPage(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Please provide content!');
        }

        $id = $request->id;
        $contentId = $request->contentId;
        $content = $request->content;

        DB::table('contact_us_content')
            ->where('page_id', $id)
            ->update(array($contentId=>$content));

        return back()->with('success', 'Contact Us Page content updated successfully!');
    }


    public function updateDisclaimerPage(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Please provide content!');
        }

        $id = $request->id;
        $contentId = $request->contentId;
        $content = $request->content;

        DB::table('disclaimer')
            ->where('page_id', $id)
            ->update(array($contentId=>$content));

        return back()->with('success', 'Disclaimer Page content updated successfully!');
    }

    public function updatePrivacyPage(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Please provide content!');
        }

        $id = $request->id;
        $contentId = $request->contentId;
        $content = $request->content;

        DB::table('privacy_policy')
            ->where('page_id', $id)
            ->update(array($contentId=>$content));

        return back()->with('success', 'Privacy Policy Page content updated successfully!');
    }

    public function updateTermsPage(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Please provide content!');
        }

        $id = $request->id;
        $contentId = $request->contentId;
        $content = $request->content;

        DB::table('terms_condition')
            ->where('page_id', $id)
            ->update(array($contentId=>$content));

        return back()->with('success', 'Terms and Condition Page content updated successfully!');
    }

    //
    public function updateFaqPage(Request $request)
    {
        if($request->content=="")
        {
            return back()->with('error', 'Fill content first!');
        }
        $id = $request->id;
        $name = $request->name;
        if($name == 'question')
        {
            $question = FaqQuestions::find($id);
            $question->question = $request->content;
            $question->save();

        }
        if($name == 'answer')
        {
            DB::table('faq_answers')
                ->where('faq_questions_id', $id)
                ->update(['answer' => $request->content]);
        }
        return back()->with('success', 'FAQ updated successfully!');
    }
    //

    public function homePageContentImageUpdate(Request $request)
    {
        if($_FILES['image_name']['size'] > 2000000)
        {
            $data = array('status' => 'error', 'response' => 'Image should be less than 2 MB!');
            return response()->json($data);
        }

        if($request->file('image_name')) 
        {
            $id = $request->id;
            $extension = $request->image_name->extension();
            $image_name= $request->id.'.'.$extension;
        
            if(!($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'))
            {
                $data = array('status' => 'error', 'response' => 'Please upload JPG, PNG or JPEG image!');
                return response()->json($data);
            }

            $image_url='uploads/homepage/'.$image_name;

            if(File::exists($image_url))
            {
                File::delete($image_url);
            }

            $request->file('image_name')->move(public_path("/uploads/homepage/"), $image_name);

            DB::table('home_page_content')
                ->where('page_id', $id)
                ->update(array('image'=>$image_name));
            $data = array('status' => 'success', 'response' => $image_name);

            return response()->json($data);
        }
    }

    public function aboutUsContentImageUpdate(Request $request)
    {
        if($_FILES['image_name']['size'] > 2000000)
        {
            $data = array('status' => 'error', 'response' => 'Image should be less than 2 MB!');
            return response()->json($data);
        }

        if($request->file('image_name')) 
        {
            $id = $request->id;
            $extension = $request->image_name->extension();
            $image_name= $request->id.'.'.$extension;
        
            if(!($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'))
            {
                $data = array('status' => 'error', 'response' => 'Please upload JPG, PNG or JPEG image!');
                return response()->json($data);
            }

            $image_url='uploads/aboutusPageContent/'.$image_name;

            if(File::exists($image_url))
            {
                File::delete($image_url);
            }

            $request->file('image_name')->move(public_path("/uploads/aboutusPageContent/"), $image_name);

            DB::table('about_us_page_content')
                ->where('page_id', $id)
                ->update(array('image'=>$image_name));
            $data = array('status' => 'success', 'response' => $image_name);

            return response()->json($data);
        }

    }
}