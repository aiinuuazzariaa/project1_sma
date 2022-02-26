<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Major;
use Illuminate\Support\Facades\Validator;
class MajorController extends Controller
{
//show all data of major table
public function show()
    {
        return major::all();
    }
    
//show detail data of major table
public function detail($id) 
    {

        if(major::where('id_major', $id)->exists()) {
            $data = major::where('major.id_major', '=', $id)
            ->get();
            return Response()->json($data);
        }
        
        else {
            return Response()->json(['message' => 'not found' ]);
        }
    }

//add data tp major table
public function store(Request $request)
    {

    $validator=Validator::make($request->all(),
    [
    'major_type' => 'required'
    ]);
    
    if($validator->fails()) {
        return Response()->json($validator->errors());
    }

    $simpan = major::create([
    'major_type' => $request->major_type
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

//update detail data of major table
public function update($id, Request $request)
    {

    $validator=Validator::make($request->all(),
    [
    'major_type' => 'required'
    ]
    );

    if($validator->fails()) {
        return Response()->json($validator->errors());
    }
    
    $ubah = major::where('id_major', $id)->update([
    'major_type' => $request->major_type
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

//delete detail data of major table
public function destroy($id)
    {
    $hapus = major::where('id_major', $id)->delete();

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