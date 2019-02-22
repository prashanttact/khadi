<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use validator;
use Auth;
use View;
use App\Page;
use Redirect;
use DB;
use App\user_eligibility_criteria;

class PageController extends Controller {

	public function viewForm(){
		return view('pages.show-form');

	}

	public function saveForm(Request $request){
		//return str_plural('user_eligibility_criteria');


		$this->validate($request,[
			'name'=>'required',
		]);

		//To validate all field except the csrf token as required feild
		foreach ($request->except('_token') as $data => $value) {
  		$valids[$data] = "required";
		}
		$request->validate($valids);

		$obj=new user_eligibility_criteria;

		//personal details
		$obj->name=$request->name;
		$obj->age=$request->age;
		$obj->gender=$request->gender;
		$obj->district=$request->district;
		$obj->area=$request->area;
		$obj->cast=$request->cast;
		$obj->annual_income=$request->annual_income;

		//professional details
		$obj->employee_status=$request->employee_status;
		$obj->training_certificate=$request->training_certificate;
		$obj->adhaar_card=$request->adhaar_card;
		$obj->training_type=$request->training_type;
		$obj->loan_fund_request=$request->loan_fund_requested;
		$obj->industry=$request->industry;
		$obj->save();


		if($obj->save()=='1');
		return "Data saved successfully";
		else
		return "some error occured";

		return view('pages.show-form');

	}








	
	public function aboutus(Request $request) 
	{
		return "about us page";
		$result = DB::table('about_us_page_content')->get()->first();
		return view('frontend.page.aboutus', compact('result'));
	}

	public function contactus(Request $request) 
	{
		return "contact us page";
		$result = DB::table('contact_us_content')->get()->first();
		$data = DB::table('contact_us_content')->get()->first();
		// print_r($data);
		// die();
		return view('frontend.page.contactus', compact('result','data'));
	}

	public function disclaimer(Request $request) 
	{
		return "disclaimer page";
		$result = DB::table('disclaimer')->get()->first();
		$data = DB::table('disclaimer')->get()->first();
		return view('frontend.page.disclaimer', compact('result','data'));
	}

	public function privacy_policy(Request $request) 
	{
		return "privacy policy";
		$result = DB::table('privacy_policy')->get()->first();
		$data = DB::table('privacy_policy')->get()->first();
		return view('frontend.page.privacy_policy', compact('result','data'));
	}
	
	public function terms_condition(Request $request)
	{
		return "terms and condition";
		$result = DB::table('terms_condition')->get()->first();
		$data = DB::table('terms_condition')->get()->first();
		return view('frontend.page.terms_condition', compact('result','data'));
	}

}
