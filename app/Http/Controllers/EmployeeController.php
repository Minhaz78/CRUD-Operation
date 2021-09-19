<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    public function index() {       
        $employees =  DB::table('employees')->get();
        return view('employees' , compact('employees'));
   }
   public function create() {       
    return view('create');
}

public function store(Request $request) {
    $name = $request->name;
    $email = $request->email;
    $salary = $request->salary;
    $gender = $request->gridRadios;
    $is_active = $request->is_active;
    $birthdate = $request->birthdate;
    $department = $request->department;
    

    DB::table('employees')->insert([
        'name'  => $name,
        'email' => $email,
        'salary' => $salary,
        'gender' =>$gender,
        'is_active' => $is_active,
        'birthdate' => $birthdate,
        'department' => $department,
    ]);

    return redirect()->to('employees');

}
public function edit($id) {
    $employee =DB::table('employees')->where('id','=',$id)->first();
    return view ('edit',compact('employee'));
}

public function update(Request $request,$id) {

    $name = $request->name;
    $email = $request->email;
    $salary = $request->salary;
    $gender = $request->gridRadios;
    $is_active = $request->is_active;
    $birthdate = $request->birthdate;
    $department = $request->department;
    

    $employee =DB::table('employees')->where('id',$id)->update([
        'name'  => $name,
        'email' => $email,
        'salary' => $salary,
        'gender' =>$gender,
        'is_active' => $is_active,
        'birthdate' => $birthdate,
        'department' => $department,
    ]);

    return redirect()->back()->with('msg','successfully updated!');
    
}
    public function delete($id) {
        DB::table('employees')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg','Employee Deleted successfully!');
    
    }
}












