<?php

namespace App\Http\Controllers;

use App\Models\ChanllengeCategory;
use Illuminate\Http\Request;

class ChanllengeCategoryController extends Controller
{
    public function current(Request $request)
    {
        return response()->json($request->user());
    }

    // all categories
    public function index()
    {
        $users = ChanllengeCategory::all()->toArray();
        return array_reverse($users);
    }

    // add category
    public function create(Request $request)
    {
        $user = new ChanllengeCategory([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        $user->save();

        return response()->json('The category successfully added');
    }

    // edit category
    public function show($id)
    {
        $user = ChanllengeCategory::find($id);
        return response()->json($user);
    }

    // update category
    public function update($id, Request $request)
    {
        $user = ChanllengeCategory::find($id);
        $user->update($request->all());

        return response()->json('The category successfully updated');
    }

    // delete category
    public function delete($id)
    {
        $user = ChanllengeCategory::find($id);
        $user->delete();

        return response()->json('The category successfully deleted');
    }
}
