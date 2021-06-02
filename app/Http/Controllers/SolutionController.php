<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    // all Solutions
    public function index()
    {
        $solutions = Solution::all()->toArray();
        return array_reverse($solutions);
    }

    // add Solution
    public function create(Request $request)
    {
        $solution = new Solution([
            'title' => $request->title,
            'description' => $request->description,
            'link_github' => $request->link_github,
            'demo_url' => $request->demo_url,
            'user_id' => $request->user_id,
            'chanllen_id' => $request->chanllen_id,
        ]);
        $solution->save();

        return response()->json('The Solution successfully added');
    }

    // edit Solution
    public function show($id)
    {
        $solution = Solution::find($id);
        return response()->json($solution);
    }

    // update Solution
    public function update($id, Request $request)
    {
        $solution = Solution::find($id);
        $solution->update($request->all());

        return response()->json('The Solution successfully updated');
    }

    // delete Solution
    public function delete($id)
    {
        $solution = Solution::find($id);
        $solution->delete();

        return response()->json('The Solution successfully deleted');
    }
}
