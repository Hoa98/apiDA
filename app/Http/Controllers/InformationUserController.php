<?php

namespace App\Http\Controllers;

use App\Models\InformationUser;
use Illuminate\Http\Request;

class InformationUserController extends Controller
{
     // all informations
     public function index()
     {
         $informations = InformationUser::all()->toArray();
         return array_reverse($informations);
     }
 
     // add information
     public function create(Request $request)
     {
         $information = new InformationUser([
             'user_id' => $request->user_id,
             'name' => $request->name,
             'gender' => $request->gender,
             'phone' => $request->phone,
             'address' => $request->address,
         ]);
         $information->save();
 
         return response()->json(['status'=>'success','message'=>'The information user successfully added','data'=>$information]);
     }
 
     // edit information
     public function show($id)
     {
         $information = InformationUser::find($id);
         return response()->json($information);
     }
 
     // update information
     public function update($id, Request $request)
     {
         $information = InformationUser::find($id);
         $information->update($request->all());
 
         return response()->json(['status'=>'success','message'=>'The information user successfully updated','data'=>$information]);
     }
 
     // delete information
     public function delete($id)
     {
         $information = InformationUser::find($id);
         $information->delete();
 
         return response()->json('The information successfully deleted');
     }
}
