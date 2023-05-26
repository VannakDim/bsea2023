<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.page.about.index', compact('abouts'));
    }


    public function edit($id)
    {
        $about = About::find($id);
        return view('admin/page/about/edit')->with('abouts', $about);
    }

   
    public function update(Request $request, $id)
    {
        // dd($request);
        $about = About::findOrFail($id);
        if($request->hasFile("description")){
            $name=$request->file("description")->getClientOriginalName();
            $file=$request->file("description")->storeAs('img',$name);
            // dd($name);
            $about->update([
                "description"=>$name,
            ]);
        }else{
            $input = $request->all();
            $about->update($input);
        }
        
        return redirect()->back()->with('flash_message', 'Record Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
