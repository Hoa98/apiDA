<?php

namespace App\Http\Controllers;

use App\Models\ChanllengeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChanllengeCategoryController extends Controller
{

    // all categories
    public function index()
    {
        $cates = ChanllengeCategory::all()->toArray();
        return array_reverse($cates);
    }

    // add category
    public function create(Request $request)
    {
        $slug = Str::slug($request->name,'-');
        $c = ChanllengeCategory::where('slug','=', $slug)->first();
        if($c){
            $slug = $slug.Str::random(5);
        }
        $imageName = '';
        if($request->hasFile('image')){
           $image = time().'-'.$request->image->getClientOriginalName();
           $request->image->move(public_path('files'),$image);
           $imageName = 'files/'.$image;
        }
        $cate = new ChanllengeCategory([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->input('description'),
            'image'=>$imageName
        ]);
        $cate->save();
        return response()->json(['status'=>'success','message'=>'The chanllenge category successfully added','data'=>$cate]);
    }

    // edit category
    public function show($id)
    {
        $cate = ChanllengeCategory::find($id);
        return response()->json($cate);
    }

    // update category
    public function update($id, Request $request)
    {
        $cate = ChanllengeCategory::find($id);
        $imageName = '';
        if($request->hasFile('image')){
           $image = time().'-'.$request->image->getClientOriginalName();
           $request->image->move(public_path('files'),$image);
           $imageName = 'files/'.$image;
        }
        $slug = Str::slug($request->name,'-');
        $c = ChanllengeCategory::where('slug','=', $slug)
                     ->where('id','!=',$request->id)
                     ->first();
        if($c){
            $slug = $slug. Str::random(5);
        }
        $cate->name = $request->name;
        $cate->slug = $slug;
        $cate->description = $request->description;
        $cate->image = $imageName;
        $cate->save();

        return response()->json(['status'=>'success','message'=>'The chanllenge category successfully updated','data'=>$cate]);
    }

    // delete category
    public function delete($id)
    {
        $cate = ChanllengeCategory::find($id);
        $cate->delete();

        return response()->json('The category successfully deleted');
    }
}
