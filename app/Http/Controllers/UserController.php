<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

 
    public function edit($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('admin.users.edit')->with('user', $user);
    }

  
    public function update(Request $request, $id)
    {
        // dd($request);
        $user = User::findOrFail($id);
        if($request->hasFile("photo")){
            $name=$request->file("photo")->getClientOriginalName();
            // dd($name);
            $file=$request->file("photo")->storeAs('img',$name);
            // Session::put('photo',$name);
            $user->update([
                "photo"=>$name,
            ]);
            return redirect()->back()->with('profile_message', 'Record Updated!');
        }
        else{
            $request->validate([
                'username'=>'required',
                'password'=>'required|min:5|max:30',
                'new_password'=>'required|min:5|max:30',
                'confirm_password'=>'required|same:new_password|min:6',
            ]);

            if(Hash::check($request->password, $user->password)){
                
                $user->name = $request->username;
                $user->password = Hash::make($request->new_password);
                $user->save();
            
            }else{
                return redirect()->back()->with('account_message', 'Password is incorrect!');
            }
            return redirect()->back()->with('account_message', 'Record Updated!');
        }
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
