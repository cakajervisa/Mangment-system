<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use function GuzzleHttp\Promise\all;

class StudentController extends Controller
{
    public  function  index(){

        $students= student ::all();
        return view('home',compact('students'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request)
    {
        $this ->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required'
        ]);
        $student=new Student;
        $student-> first_name = $request->firstname;
        $student-> last_name = $request->lastname;
        $student-> email = $request->email;
        $student-> phone = $request->phone;
        $student-> save();
        return redirect(route('home'))->with('successmsg','student sucesfully adedd');
    }

    public function edit($id){
        $student= Student::find($id);
        return view('edit',compact('student'));

    }

    public function update(Request $request,$id){
        $this ->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required'
        ]);
        $student= Student::find($id);
        $student-> first_name = $request->firstname;
        $student-> last_name = $request->lastname;
        $student-> email = $request->email;
        $student-> phone = $request->phone;
        $student-> save();
        return redirect(route('home'))->with('successmsg','student sucesfully updated');
    }
    public function delete($id){
        student::find($id)->delete();
        return redirect(route('home'))->with('successmsg','student sucesfully deleted');
    }
}
