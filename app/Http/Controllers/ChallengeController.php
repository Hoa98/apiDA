<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChallengeController extends Controller
{
    // all challenges
    public function index()
    {
        $chans = Challenge::all()->toArray();
        return array_reverse($chans);
    }

    // add challenge
    public function create(Request $request)
    {
        $slug = Str::slug($request->name,'-');
        $c = Challenge::where('slug','=', $slug)->first();
        if($c){
            $slug = $slug.Str::random(5);
        }
        $chan = new Challenge([
            'title' => $request->title,
            'slug' =>$slug,
            'description' => $request->description,
            'language' => $request->language,
            'link_figma' => $request->link_figma,
            'level' => $request->level,
            'cate_challen_id' => $request->cate_challen_id,
        ]);
        $chan->save();

        return response()->json(['status'=>'success','message'=>'The challenge successfully added','data'=>$chan]);
    }

    // edit challenge
    public function show($id)
    {
        $chan = Challenge::find($id);
        return response()->json($chan);
    }

    // update challenge
    public function update($id, Request $request)
    {
        $chan = Challenge::find($id);
        $chan->update($request->all());

        return response()->json(['status'=>'success','message'=>'The challenge successfully updated','data'=>$chan]);
    }

    // delete challenge
    public function delete($id)
    {
        $chan = Challenge::find($id);
        $chan->delete();

        return response()->json('The challenge successfully deleted');
    }
}
