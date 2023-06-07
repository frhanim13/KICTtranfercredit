<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\application;
use App\User;

class applicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $req)
    {
        $file = $req->file('courseOutline') ;

        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/courseOutline/' ;
        $file->move($destinationPath,$fileName);



        $application=new application;
        $req->input();


        $application -> courseCode =$req->courseCode;
        $application -> courseTitle =$req->courseTitle;
        $application -> credit =$req->credit;
        $application-> grade =$req->grade;
        $application -> cciium =$req->cciium;

        $application -> courseOutline =$fileName ;
        $application-> user_id = Auth::user()->user_id;

        $application -> matric_id=$req = Auth::user()->matric_id;


        $application-> save();

        return back()->with('flash_success', trans('Claims successfully be requested'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $status = application:: where ('user_id',Auth::user()->user_id)
        ->get();

        return view('student.application', ['status'=>$status]);
    }

    public function show1()
    {
        $status = application:: where ('user_id',Auth::user()->user_id)
        ->get();

        return view('student.status', ['status'=>$status]);
    }
    public function pending()
    {
        $pending = application :: where ('status','pending')->get();

        return view('admin.pending', ['pending'=>$pending]);
    }


    public function listPending()
    {
        $pending = DB::table('users')
        ->join('applications','users.user_id','=','applications.user_id')
        ->join('prev_unis','users.user_id','=','prev_unis.user_id')
        ->select('users.user_id','name','courseCode','nameUni','users.matric_id','transcript')
        ->groupBy('users.user_id')
        ->where('status','pending')
        ->get();
        return view('admin.pending', ['pending'=>$pending]);
    }
    public function listReview()
    {
        $review = DB::table('users')
        ->join('applications','users.user_id','=','applications.user_id')
        ->join('prev_unis','users.user_id','=','prev_unis.user_id')
        ->select('users.user_id','name','courseCode','nameUni','users.matric_id','transcript')
        ->groupBy('users.user_id')
        ->where('status','Under Review')
        ->get();
        return view('admin.review', ['review'=>$review]);
    }

    public function listComplete()
    {
        $complete = DB::table('users')
        ->join('applications','users.user_id','=','applications.user_id')
        ->join('prev_unis','users.user_id','=','prev_unis.user_id')
        ->select('users.user_id','name','courseCode','nameUni','users.matric_id','transcript')
        ->groupBy('users.user_id')
        ->where('status','Approved')
        ->orwhere('status','Rejected')
        ->get();
        return view('admin.complete', ['complete'=>$complete]);
    }

    public function details($matric_id)
    {

        echo $matric_id;
        $details = DB::table('applications')
        ->join('users','applications.user_id','=','users.user_id')
        ->select()

       ->where('applications.matric_id','=', $matric_id)
        ->where('status','pending')

        ->get();
        return view('admin.details', ['details'=>$details]);
    }
    public function detailsReview($matric_id)
    {

        echo $matric_id;
        $details = DB::table('applications')
        ->join('users','applications.user_id','=','users.user_id')
        ->select()

       ->where('applications.matric_id','=', $matric_id)
        ->where('status','Under Review')

        ->get();
        return view('admin.detailsReview', ['details'=>$details]);
    }


    public function detailsComplete($matric_id)
    {

        echo $matric_id;
        $complete = DB::table('applications')
        ->join('users','applications.user_id','=','users.user_id')
        ->select()


        ->where('status','Approved')
        ->orWhere('status','Rejected')
        ->where('applications.matric_id','=', $matric_id)

        ->get();
        return view('admin.detailsComplete', ['complete'=>$complete]);
    }

    public function update1(Request $req){


        $req->input();

        $iddd=$req-> cid;
        $claim= application:: where ('id',$iddd)->first();

        $claim -> status = $req-> status;

        $claim -> save();
        return back(); return redirect()->back();


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
        //
    }
}
