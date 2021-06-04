<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   /**
     * Get authenticated user.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function current(Request $request)
    {
        return response()->json($request->user());
    }

    // all users
    public function index()
    {
        return response()->json([
            'status'=>'success',
            'messege' => 'Succsess get list users',
            'data' => User::all(),
        ], 200);
    }

    // add user -> add user_role
    public function create(Request $request)
    {       $imageName='';
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $images = time().'-'.$image->getClientOriginalName();
            $image->move(public_path('files'),$images);
            $imageName = 'files/'.$images;
        }
        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar'=> $imageName
        ]);
        $user->save();
        return response()->json(['status'=>'success','message'=>'The user successfully added','data'=>$user],201);
    }

    // edit user
    public function show($id)
    {
        $user = User::find($id);
        return response()->json(['status'=>'success','message'=>'Succsess get user','data'=>$user],200);
    }

    // update user
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $imageName = $user->avatar;
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $images = time().'-'.$image->getClientOriginalName();
            $image->move(public_path('files'),$images);
            $imageName = 'files/'.$images;
        }
         $user->username = $request->username;
         $user->email = $request->email;
         $user->avatar = $imageName;
         $user->save();

        return response()->json([
            'status'=>'success',
            'messege' => 'The user successfully updated',
        ], 200);
    }

    // delete user
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'status'=>'success',
            'messege' => 'Succsess delete user',
        ], 200);
    }
}
