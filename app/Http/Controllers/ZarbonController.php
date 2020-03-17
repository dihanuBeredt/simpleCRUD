<?php

namespace App\Http\Controllers;

use App\Models\zarbon;
use Illuminate\Http\Request;

class ZarbonController extends Controller
{

public function controllpanel(){

    return view('zarbon.zarbon');
}

public function createPage(){
    return view('zarbon.createPage');
}

public function create (Request $request){
    $check = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);
    if ($check){
        $data = zarbon::create($request->except(["_token"]));
    }
    if($data){
        $message = "success";
    }else{
        $message ="failed";
    }
return view('zarbon.create',compact("message"));
}

public function showForEdit(){
$data = zarbon::all();
return view('zarbon.showForEdit')->with(['data'=>$data]);
}

public function editPage($id){
    $data = zarbon::findorfail($id);
    return view('zarbon.editPage')->with(['data'=>$data]);
}

public function edit (Request $request,$id){
    $data = zarbon::find($id);
    $updated = $request->except('_token');
    $ss = $data->update($updated);
    if($ss){
        $message = "success";
    }else{
        $message ="failed";
    }
    return view('zarbon.edit',compact("message"));
}
public function deletePage(){
    $data = zarbon::all();
    return view('zarbon.deletePage')->with(['data'=>$data]);
}
public function delete ($id){

    $data = zarbon::findOrFail($id);
    $delete = $data->delete();
    if ($delete) {
        $message = "success!";
    } else {
        $message = "failed!";
    }

    return view('zarbon.delete',compact('message'));

}

public function list(){
    $data = zarbon::all();
    return view('zarbon.list')->with(['data'=>$data]);
}

}
