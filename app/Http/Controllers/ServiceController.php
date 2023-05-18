<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    //
    public function add(){
        return view('admin.service.add');
    }

    public function create( Request $request){
        Service::createService($request);
        return back()->with('success', 'Successfully created the service');
    }
    public function manage(){
        return view('admin.service.manage',[
            'services'=>Service::all()
        ]);
    }


    public function edit($id){
        $this->service =Service::find($id);
        return view('admin.service.edit',['service'=>$this->service]);
    }

    public function update(Request $request , $id){
        Service::updateService($request, $id);
        return redirect()->route('add.service')->with('success','Successfully Updated');
    }

    public function delete($id){
        $this->service =Service::find($id);
        if (file_exists($this->service->image)){
            unlink($this->service->image);
        }
        $this->service->delete();
        return redirect()->route('add.service')->with('success','Successfully Deleted');

    }


}
