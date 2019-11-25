<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Csd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CsdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }
    public function lists(){
        $data=Csd::get();
        return view('admin/csd/lists',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/csd/create');
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
        $post=$request->except('_token');
        $data=Csd::insert($post);
        if($data){
            return redirect('admin/csd/lists');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data=Csd::find($id);
        return view('admin/csd/edit',['data'=>$data]);
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
        $post=$request->except('_token');
        $res=Csd::where('csd_id',$id)->update($post);

            return redirect('admin/csd/lists');


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
        if(!$id){
            abort(404);
        }
        $res=Csd::destroy($id);
        if($res){
            return redirect('admin/csd/lists');

        }
    }
}
