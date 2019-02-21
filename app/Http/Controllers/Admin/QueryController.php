<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Admin\Query;
use Session;
use Auth;
use DB;
use validator;
use File;
use App\Http\Controllers\Admin\Resize_Image;
use Helper;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = 'View Feedback/Query';
        $data['template'] = 'admin/query/view';
        $data['results'] = Query::orderBy('id', 'desc')->get();
        //return $data['results'];
        $query_type = DB::table('queries')
        ->select('queries.*', 'query_feedback_types.*')
        ->join('query_feedback_types', 'queries.query_feedback_type_id', '=', 'query_feedback_types.id')
        ->orderBy('created_at', 'asc')
        ->get();
        //return $query_type;
        return view('admin/includes/page', compact('data','query_type'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data['page'] = 'Query';
        $data['template'] = 'admin/query/show';
        $data['results'] = Query::find($id);
        //return $data;

        //if(count($data['results'])>0)
        if($data['results'])
        {
            return view('admin/includes/page', compact('data'));    
        }
        else
        {
            return redirect('view-query');
        }  
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
        Query::find($id)->delete();
        Session::flash('success', 'Query/Feedback Deleted Successfully.');
        return redirect('view-query');
    }
}
