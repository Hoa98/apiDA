<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function current(Request $request)
    {
        return response()->json($request->user());
    }

    // all Solutions
    public function index()
    {
        $users = Solution::all()->toArray();
        return array_reverse($users);
    }

    // add Solution
    public function create(Request $request)
    {
        $user = new Solution([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'link_github' => $request->input('link_github'),
            'demo_url' => $request->input('demo_url'),
            'user_id' => $request->input('user_id'),
            'chanllen_id' => $request->input('chanllen_id'),
        ]);
        $user->save();

        return response()->json('The Solution successfully added');
    }

    // edit Solution
    public function show($id)
    {
        $user = Solution::find($id);
        return response()->json($user);
    }

    // update Solution
    public function update($id, Request $request)
    {
        $user = Solution::find($id);
        $user->update($request->all());

        return response()->json('The Solution successfully updated');
    }

    // delete Solution
    public function delete($id)
    {
        $user = Solution::find($id);
        $user->delete();

        return response()->json('The Solution successfully deleted');
    }
}
