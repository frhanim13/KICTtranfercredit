<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\prevUni;
use App\User;

class prevUniController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $file = $req->file('transcript') ;

        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/transcript/' ;
        $file->move($destinationPath,$fileName);


        $prevUni=new prevUni;
        $req->input();


        $prevUni -> dipName =$req->dipName;
        $prevUni -> yearStudy =$req->yearStudy;
        $prevUni -> reason =$req->reason;
        $prevUni -> cgpa =$req->cgpa;
        $prevUni -> nameUni =$req->nameUni;
        $prevUni -> transcript =$fileName ;
        $prevUni -> user_id = Auth::user()->user_id;

        $prevUni -> matric_id=$req = Auth::user()->matric_id;


        $prevUni -> save();

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
        $uni = prevUni:: where ('user_id',Auth::user()->user_id)
        ->get();

        return view('student.previous', ['uni'=>$uni]);
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
