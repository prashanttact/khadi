<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\PageContent;
use App\News;
use Auth;
use Session;
use App\User;
use Hash;
use DB;
use validator;
use Mail;
use App\Admin\Faq;
use App\Admin\Category;
use App\Admin\Query;
use App\Admin\QueryFeedbackType;
use App\Caste;
use App\GovTraining;
use App\PrivateTraining;
use App\LoanLimit;
use App\Industry;
use App\EducationalQualification;
use App\AnnualIncome;
use App\Area;
use App\LegalStatus;
use App\EligibilityCriteria;
use App\Scheme;
use Illuminate\Support\Facades\Input;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function homePage(Request $request) 
    {
      	// $data = DB::table('home_page_content')->get()->first();
       //  $data_news = DB::table('news')->get()->all();
       //  $data_alerts = DB::table('alert')->get()->all(); 
       //  $data_gallery =  DB::table('gallery')
       //                      ->inRandomOrder()
       //                      ->get()->take(4)->all();
        // print_r($data_gallery);
        // die();
      $faq=Faq::all();
      $category_list=Category::all();
      $query_type = QueryFeedbackType::all();
      //return $faq;
        if(!$faq->isEmpty() && !$category_list->isEmpty()){
          //return $faq;
        return view('frontend.home.index',compact('faq','category_list','query_type'));//,compact(['data','data_news','data_alerts','data_gallery']));
        }
        else{
          return view('frontend.home.index');
        }
    }

    public function pageUnderConstruction(Request $request){
      $pageName=$request->pageName;
      //return $pageName;
      return view('frontend.UnderConstruction',compact('pageName'));
    }

    public function saveFeedback(Request $request){
      //return $request;
      $this->validate($request,[
        'name'=>'required',
        'email_id'=>'required',
        'mobile_no'=>'required',
        'query_type'=>'required',
        'message'=>'required',
      ]);

      $obj=new Query;
      $obj->name=$request->name;
      $obj->mobile_no=$request->mobile_no;
      $obj->email_id=$request->email_id;
      $obj->query_feedback_type_id=$request->query_type;
      $obj->remark=$request->message;

      $obj->save();
      return view('frontend.page.feedbackSubmitted');
      return redirect()->back()->with('message', 'Your feedback is submitted, we will reply back soon');
      return $obj;
      
    }

    public function checkEligibility(){
      $caste=Caste::all();
      $govTraining=GovTraining::all();
      $pvtTraining=PrivateTraining::all();
      $loanLimit=LoanLimit::all();
      $industry=Industry::all();
      $edu_qualification=EducationalQualification::all();
      $annual_income=AnnualIncome::all();
      $area=Area::all();
      $legal_status=LegalStatus::all();
      

      return view('frontend.page.eligibilityCheck')->with(['caste'=>$caste,'govTraining'=>$govTraining,'pvtTraining'=>$pvtTraining,'loanLimit'=>$loanLimit,'industry'=>$industry,'edu_qualification'=>$edu_qualification,'annual_income'=>$annual_income,'area'=>$area,'legal_status'=>$legal_status]);
    }

    public function checkUserEligibility(Request $request){

      //return $request;
      $EligibilityCriteria=EligibilityCriteria::all();
      $fields = Input::get();
      $feild_names=array();
      $i=0;
      $scheme['s3']=0;
      $scheme['s5']=0;
      //$request->edu_qualification=max($request->edu_qualification);
      //return  $edu_qualification;

      if(!isset($request->govTraining_cer)){
        $request->govTraining_cer=0;
      }
      if(!isset($request->pvtTraining_cer)){
        $request->pvtTraining_cer=0;
      }
      
      
      foreach($EligibilityCriteria as $row){
        
        if($row->criteria_name=='age' && $row->criteria_value>$request->age){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'age matched for scheme 3 </br>';

          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'age matched for scheme 5 </br>';
          }
          

        }

          if($row->criteria_name=='area' && $row->criteria_value==$request->area){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'area matched for scheme 3 </br>';
          }
        }
          elseif($row->criteria_name=='area' && $row->scheme_id==5){
            $scheme['s5']++;
            //echo 'area matched for scheme 5 </br>';
          }
        

          if($row->criteria_name=='edu_qualification' && $row->criteria_value<=$request->edu_qualification){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'education matched for scheme 3 </br>';
          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'education matched for scheme 5 </br>';
          }
          

        }

          if($row->criteria_name=='govTraining_type' && $row->criteria_value==$request->govTraining_type){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'gov training matched for scheme 3 </br>';
          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'gov matched for scheme 5 </br>';
          }
          
          

        }

          if($row->criteria_name=='pvtTraining_type' && $row->criteria_value==$request->pvtTraining_type){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'pvt matched for scheme 3 </br>';
          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'pvt matched for scheme 5 </br>';
          }
          

        }

          if($row->criteria_name=='employment_registration' && $row->criteria_value<=$request->employment_registration
        ){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'employment_registration matched for scheme 3 </br>';
          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'employment_registration matched for scheme 5 </br>';
          }
          

        }

          if($row->criteria_name=='industry' && $row->criteria_value<=$request->industry){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'industry matched for scheme 3 </br>';
          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'industry matched for scheme 5 </br>';
          }
          

        }

          if($row->criteria_name=='loan_requirement' && $row->criteria_value>=$request->loan_requirement){
          if($row->scheme_id==3){
            $scheme['s3']++;
            //echo 'loan matched for scheme 3 </br>';
          }
          elseif($row->scheme_id==5){
            $scheme['s5']++;
            //echo 'loan matched for scheme 5 </br>';
          }
          

        }

        if($row->scheme_id==5 && $row->criteria_name=='loan_requirement'){
          if($request->edu_qualification>=$row->criteria_value && $request->loan_requirement>=$row->loan_requirement){
            //echo '<br>user edu : '.$request->edu_qualification."==";
            //echo 'database edu : '.$row->criteria_value."==";
            //echo 'user loan : '.$request->loan_requirement."==";
            //echo 'database loan : '.$row->criteria_value."<br>";
            //echo "</br>at least class 10th pass with loan demand over 15 lakhs<br>";
          }
          elseif($request->edu_qualification<$row->criteria_value && $request->loan_requirement>=$row->criteria_value){
            //echo "under 10 and loan deman is over 10 lakhs<br>";
            $scheme['s5']--;
          }
        }

       
      }
      //echo '<pre>';
      //return $request;
      //print_r($scheme);
      //echo "</br>";
      // echo $scheme['s3']."</br>";
      // echo $scheme['s5'];

      // $final_array=array();

      // if($scheme['s3']>$scheme['s5']){
      //   array_push($final_array,'S3','S5');
      // }
      // else{
      //    array_push($final_array,'S5','S3');
      // }

      // print_r($final_array);

      //$scheme_list=Scheme::whereIn('array_key',$final_array)->get();
      //return view('frontend.page.schemeList');

      $final_array=arsort($scheme);
      //print_r($scheme);

      // foreach($scheme as $key=>$value){
      //   $key_array[]=substr($key,1,1);
      // }
      // foreach($scheme as $key=>$value){
      //   $sort_parameter[]=substr($key,0,2);
      // }
      // print_r($key_array);
      // print_r($sort_parameter);


      // $scheme_list=Scheme::whereIn('id',$key_array)->get();
      // return $scheme_list;


      foreach($scheme as $key=>$value){
        $scheme_list[]=DB::table('schemes')->where('array_key','=',$key)->first();
      }
     // print_r(expression)

      // print_r($scheme_list);
      // echo $scheme_list[0]->id;
      //exit;
      return view('frontend.page.schemeList',compact('scheme_list'));


  }


  
}
