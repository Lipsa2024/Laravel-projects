<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){
        // $student =DB::table('students')->where('id',3)->get();
        // $students =DB::table('students')->get();
        $students =DB::table('students')
                      ->paginate(4);
        // $student =DB::table('students')->find(4);
        // return $student;
        // dd($student);
        // dump($student);

        // foreach($student as $stu){
        //     echo $stu->name . "<br>";
        // }
        return view("allstudents", ["data" => $students]);
    }

    public function showStudent(string $id){
        $student =DB::table('students')->where('id',$id)->get();
        return view("student", ["data" => $student]);
    }

    public function addStudent(Request $req){
        $student =DB::table('students')
                 ->insert([
                            "name"=>$req->studentName,
                            "email"=>$req->studentEmail,
                            "age"=>$req->studentAge,
                            "phone"=>$req->studentPhone,
                            "city"=>$req->studentCity,
                            "address"=>$req->studentAddress
                 ]);
    if($student)
    return redirect()->route('home');
        //echo "<h1>data added successfully</h1>";
    else
        echo "<h1>data not added </h1>";
    }
    // public function addStudent(){
        
    //     $student =DB::table('students')
    //              ->insert(
    //                 [
    //                     [
    //                         "name"=>"Mum",
    //                         "email"=>"mum@gmail.com",
    //                         "age"=>16,
    //                         "phone"=>889513515,
    //                         "city"=>"banglore",
    //                         "address"=>"maratha"
    //                     ],
    //                     [
    //                         "name"=>"Mummmmy",
    //                         "email"=>"mymmy@gmail.com",
    //                         "age"=>31,
    //                         "phone"=>897894456,
    //                         "city"=>"jhargram",
    //                         "address"=>"satma"
    //                      ]
    //                 ]
    //                     );
    //                     // to ignore unique value
    //             //  ->insertOrIgnore(
    //             //     [
    //             //     [
    //             //         "name"=>"Mum",
    //             //         "email"=>"mum@gmail.com",
    //             //         "age"=>16,
    //             //         "phone"=>889513515,
    //             //         "city"=>"banglore",
    //             //         "address"=>"maratha"
    //             //     ]
    //             //  ]);
    // // insertGetId() method insert the data into table and return primary key value.
    // // upsert() method check unique values in the column
    //     if($student)
    //     echo "<h1>data added successfully</h1>";
    // else
    //     echo "<h1>data not added </h1>";
    // }
     public function updatepage(string $id){
        $student =DB::table('students')->find($id);
        return view("updatestudent", ["data" => $student]);
     }

     public function updateStudent(Request $req, $id){
        $student =DB::table('students')
                 ->where('id',$id)
                 ->update([
                            "name"=>$req->studentName,
                            "email"=>$req->studentEmail,
                            "age"=>$req->studentAge,
                            "phone"=>$req->studentPhone,
                            "city"=>$req->studentCity,
                            "address"=>$req->studentAddress
                 ]);
    if($student)
    return redirect()->route('home');
        //echo "<h1>data added successfully</h1>";
    else
        echo "<h1>data not added </h1>";
    }

    // public function updateStudent(){
    //     $student =DB::table('students')
    //     //if name, city data already available then update, otherwise insert the record
    //     ->updateOrInsert(
    //         [
    //            "name"=>"Mumpy",
    //            "city"=>"jhargram"
    //         ],
    //         [
    //           "age"=>36,
    //           "address"=>"Kortia"
    //         ]
    //         );
    //     // ->where('id',6)
    //     // ->update([
    //     //      "city"=>"mumbai",
    //     //      "age"=>69
    //     // ]);
    //     if($student)
    //     echo "<h1>data updated successfully</h1>";
    // else
    //     echo "<h1>data not update </h1>";
    // }


    public function deleteStudent(string $id){
        $student =DB::table('students')
        ->where('id',$id)
        ->delete();
        if($student)
        echo "<h1>data deleted successfully</h1>";
    else
        echo "<h1>data not deleted </h1>";
    }

    
}
