<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;
class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return'555';
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,[
            'title' =>'required',
            'description' =>'required',
            'time' =>'required',
            'user_id' =>'required'
        ]);

        $title = $request->input('title');
        $description =$request->input('description');
        $time =$request->input('time');
        $user_id =$request->input('user_id');


        $add = new Meeting;
        $add ->title =$request->input('title');
        $add ->description =$request->input('description');
        $add ->time =$request->input('time');
        $add ->description =$request->input('description');


        $meeting = [
            'title'=>$title,
            'description'=>$description,
            'time'=>$time,
            'user_id'=>$user_id,
            'view_meeting'=>[
                'href' => 'api/v1/meeting/1',
                'method'=>'GET'
            ]
        ];

        $response = [
            'msg'=>'Meeting Create',
            'data' => $meeting
        ];

        return response()->json($response, 201);
        //return 'hello';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return'555';
        
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
        return'555';
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return'555';
        
    }
}
