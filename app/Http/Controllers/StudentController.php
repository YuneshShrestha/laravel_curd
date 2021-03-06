<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save huna bhanda agadi validation
        $data= $request->validate([
            'name'=>'required',
            'roll'=>'required',
            'address'=>'required',
        ]);
        //save hunae code
        $student = new Student();
        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        if($request->hasFile('image')){
            // file name is not as expected
            $temp = $request->image;
            // updating file name getClientOriginalName gives original name of file...time is for creating unique time stamp
            $filename = time() . $temp->getClientOriginalName();
            // moving image to public folder
            $temp->move('images/',$filename);
            // saving image directory to db
            $student->image = 'images/'.$filename;
        }
        $student->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
            //update hunae code
            $student =  Student::find($id);
            $student->name = $request->name;
            $student->roll = $request->roll;
            $student->address = $request->address;
            $student->mobile = $request->mobile;
            if($request->hasFile('image')){
                // file name is not as expected
                $temp = $request->image;
                // updating file name getClientOriginalName gives original name of file...time is for creating unique time stamp
                $filename = time() . $temp->getClientOriginalName();
                // moving image to public folder
                $temp->move('images/',$filename);
                // saving image directory to db
                $student->image = 'images/'.$filename;
            }
            $student->save();
            return redirect('/');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
