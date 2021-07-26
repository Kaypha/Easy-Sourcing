<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $requests=Requests::all();
        return view('show_requests')->with('requests', $requests);
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
        $this->validate($request,[
            'name'=>'required',
            'dept'=>'required',
            'item'=>'required',
            'quantity'=>'required',
            'desc'=>'required',
            'quote_date'=>'required',
            
        ]);

        $requests=new Requests;

        $requests->name=  $request->input('name');
        $requests->dept=  $request->input('dept');
        $requests->item=  $request->input('item');
        $requests->quantity=  $request->input('quantity');
        $requests->desc= $request->input('desc');
        $requests->quote_date= $request->input('quote_date');
        $requests->status= false;
        

        $requests->save();
         return redirect('/showRequests');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=1)
    {
        //
        $requests=DB::table('requests')-> where('id',$id);
        return view('show_requests')->with('requests', $requests);
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
