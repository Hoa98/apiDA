<?php

namespace App\Http\Controllers;

use App\Models\Chanllenge;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChanllengeController extends Controller
{
    // all chanllenges
    public function index()
    {
        $chans = Chanllenge::all()->toArray();
        return array_reverse($chans);
    }

    // add chanllenge
    public function create(Request $request)
    {
        $slug = Str::slug($request->name,'-');
        $c = Chanllenge::where('slug','=', $slug)->first();
        if($c){
            $slug = $slug.Str::random(5);
        }
        $chan = new Chanllenge([
            'title' => $request->title,
            'slug' =>$slug,
            'description' => $request->description,
            'language' => $request->language,
            'link_figma' => $request->link_figma,
            'level' => $request->level,
            'cate_chanllen_id' => $request->cate_chanllen_id,
        ]);
        $chan->save();

        return response()->json(['status'=>'success','message'=>'The chanllenge successfully added','data'=>$chan]);
    }

    // edit chanllenge
    public function show($id)
    {
        $chan = Chanllenge::find($id);
        return response()->json($chan);
    }

    // update chanllenge
    public function update($id, Request $request)
    {
        $chan = Chanllenge::find($id);
        $chan->update($request->all());

        return response()->json(['status'=>'success','message'=>'The chanllenge successfully updated','data'=>$chan]);
    }

    // delete chanllenge
    public function delete($id)
    {
        $chan = Chanllenge::find($id);
        $chan->delete();

        return response()->json('The chanllenge successfully deleted');
    }
}
