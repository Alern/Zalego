<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{


    public function showUsers(){
        $admin=User::paginate(7);
        return view('viewUsers',['admins'=>$admin]);
    }
    public function Edit($id){
        $users = User::find($id);
        return view('editUser',compact('users'));
    }
    public function update(Request $request  ){
        $id=$request->input('id');
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $gender=$request->input('gender');
        $languages=$request->input('languages');
        $uname=$request->input('uname');
        $email=$request->input('email');

        DB::table('users')->where('id',$id)->update(['fname'=>$fname,'lname'=>$lname, 'gender'=>$gender, 'languages'=>$languages,
            'uname'=>$uname,'email'=>$email]);

        /* return view('admin.viewUsers');*/
        return back()->with('success_message','Record Updated Successfully');

    }
    public function delete(Request $request)
    {
        $deleteUser = User::find($request->id);
        $deleteUser->delete();
        return redirect("home")->with('success_message','User Deleted Successfully');
    }



}
