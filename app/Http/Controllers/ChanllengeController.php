<?php

namespace App\Http\Controllers;

use App\Models\Chanllenge;
use Illuminate\Http\Request;

class ChanllengeController extends Controller
{
    public function current(Request $request)
    {
        return response()->json($request->user());
    }

    // all chanllenges
    public function index()
    {
        $users = Chanllenge::all()->toArray();
        return array_reverse($users);
    }

    // add chanllenge
    public function create(Request $request)
    {
        $user = new Chanllenge([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'language' => $request->input('language'),
            'link_figma' => $request->input('link_figma'),
            'level' => $request->input('level'),
            'cate_chanllen_id' => $request->input('cate_chanllen_id'),
        ]);
        $user->save();

        return response()->json('The chanllenge successfully added');
    }

    // edit chanllenge
    public function show($id)
    {
        $user = Chanllenge::find($id);
        return response()->json($user);
    }

    // update chanllenge
    public function update($id, Request $request)
    {
        $user = Chanllenge::find($id);
        $user->update($request->all());

        return response()->json('The chanllenge successfully updated');
    }

    // delete chanllenge
    public function delete($id)
    {
        $user = Chanllenge::find($id);
        $user->delete();

        return response()->json('The chanllenge successfully deleted');
    }
}
