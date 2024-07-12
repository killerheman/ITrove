<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'collegename' => 'required',
            'session' => 'required',
            'branch' => 'required',
            'mobileno' => 'required',
            'email' => 'required',
            'technology' => 'required',
            'aadharno' => 'required',
            'transaction_id' => 'required',
            'pic' => 'mimes:jpeg,jpg,png,pdf|required',
            'aadharpic' => 'mimes:jpeg,jpg,png,pdf|required',
            'highschool_rollno' => 'required',
            'highschool_marksheet' => 'mimes:jpeg,jpg,png,pdf|required',
            'diploma_rollno' => 'required',
            'diploma_marksheet' => 'mimes:jpeg,jpg,png,pdf|required'
        ]);

        if ($request->hasFile('pic') && $request->hasFile('aadharpic') && $request->hasFile('highschool_marksheet') && $request->hasFile('diploma_marksheet'))
        {
            $destinationPath = public_path('uploads/Diploma/'.$request->collegename.'/'.$request->branch.'/'.rand(1,100).$request->name.'/');
            //Student pic
            $pic = $request->pic;
            $stu_pic = "Pic_" . time() . rand(0, 999) . '.' . $pic->extension();
            $pic->move($destinationPath, $stu_pic);

            //Aadhar pic
            $aadharpic = $request->aadharpic;
            $aadhar = "Aadhar_" . time() . rand(0, 999) . '.' . $aadharpic->extension();
            $aadharpic->move($destinationPath, $aadhar);

            // High School
            $highschool = $request->highschool_marksheet;
            $high_school = "High_" . time() . rand(0, 999) . '.' . $highschool->extension();
            $highschool->move($destinationPath, $high_school);

            if($request->hasFile('intermediate_marksheet'))
            {
                // Intermediate
                $intermediate = $request->intermediate_marksheet;
                $inter_school = "Inter_" . time() . '.' . $intermediate->extension();
                $intermediate->move($destinationPath, $inter_school);
            }

            // diploma
            $diploma = $request->diploma_marksheet;
            $semester = "Diploma_" . time() . '.' . $diploma->extension();
            $diploma->move($destinationPath, $semester);

            $inter_school = isset($inter_school) ? $inter_school : NULL;
            $data = Student::create([
                'name' => $request->name,
                'fname' => $request->fname,
                'collegename' => $request->collegename,
                'session' => $request->session,
                'branch' => $request->branch,
                'mobileno' => $request->mobileno,
                'email' => $request->email,
                'technology' => $request->technology,
                'pic' => $stu_pic,
                'aadharno' => $request->aadharno,
                'transaction_id' => $request->transaction_id,
                'aadharpic' => $aadhar,
                'highschool_rollno' => $request->highschool_rollno,
                'highschool_marksheet' => $high_school,
                'intermediate_rollno' => $request->intermediate_rollno,
                'intermediate_marksheet' => $inter_school,
                'diploma_rollno' => $request->diploma_rollno,
                'diploma_marksheet' => $semester
            ]);
            if($data) {
                return redirect()->back()->with('toast_success','Your registration has been completed successfully.');
            }
            else {
                return redirect()->back()->with('toast_error', 'Something went wrong..');
            }
        } else {
            return redirect()->back()->with('toast_error', 'Please upload the required documents !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
