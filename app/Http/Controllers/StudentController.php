<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
//show all data of student table
public function show()
    {
        return student::all();
    }
    
//show detail data of student table
public function detail($name) 
    {

    //if(student::where('id_student', $id)->exists()) {
        $data = student::where('student.student_name', 'LIKE', '%'. $name. '%')
        ->get();
        return Response()->json($data);
    //}
    
   // else {
        //return Response()->json(['message' => 'not found' ]);
    //}
    }

//add data to student table
public function store(Request $request)
    {

    $validator=Validator::make($request->all(),
    [
    'student_name' => 'required',
    'gender' => 'required',
    'address' => 'required',
    'id_major' => 'required'
    ]
    );
    
    if($validator->fails()) {
        return Response()->json($validator->errors());
    }

    $simpan = student::create([
    'student_name' => $request->student_name,
    'gender' => $request->gender,
    'address' => $request->address,
    'id_major' => $request->id_major
    ]);

    if($simpan)
    {
        return Response()->json([
            'status' => 1,
            'message' => 'success add data !'
    ]);

    }
    else
    {
        return Response()->json([
            'status' => 0,
            'message' => 'failed add data !'
    ]);
    }
    }

//update detail data of student table
public function update($id, Request $request)
    {

    $validator=Validator::make($request->all(),
    [
    'student_name' => 'required',
    'gender' => 'required',
    'address' => 'required',
    'id_major' => 'required'
    ]
    );

    if($validator->fails()) {
        return Response()->json($validator->errors());
    }
    
    $ubah = student::where('id_student', $id)->update([
    'student_name' => $request->student_name,
    'gender' => $request->gender,
    'address' => $request->address,
    'id_major' => $request->id_major
    ]);

    if($ubah) {
        return Response()->json([
            'status' => 1,
            'message' => 'success update data !'
    ]);
    }

    else {
        return Response()->json([
            'status' => 0,
            'message' => 'failed update data !'
    ]);
    }
    }

//delete detail data of student table
public function destroy($id)
    {
    $hapus = student::where('id_student', $id)->delete();

    if($hapus) {
        return Response()->json([
            'status' => 1,
            'message' => 'success delete data !'
    ]);
    }

    else {
        return Response()->json([
            'status' => 0,
            'message' => 'failed delete data !'
    ]);
    }
    }
}