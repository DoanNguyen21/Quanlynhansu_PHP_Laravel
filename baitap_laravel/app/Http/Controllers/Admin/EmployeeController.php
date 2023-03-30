<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeRequest;
use Illuminate\Http\Request;
use App\Http\Services\Employee\EmployeeServices;
use App\Models\Employee;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
  
    protected $employeeServices;

   public function __construct(EmployeeServices $employeeServices)
   {
    $this->employeeServices = $employeeServices;
   }

    public function create_employee(){
        return view('admin.menus.addemployee',[
           'title' => 'Thêm Employee Mới'
        ]);
    }

    public function employee(EmployeeRequest $request){
 
        $this->employeeServices->create($request);

        return redirect()->route('listemploye');
    }

    public function index(){
         $employee = Employee::all();

        return view('admin.menus.listemployee', [
            'title' => 'Danh sách Employee',
            'employee' => $employee
        ]);
    }

    public function edit_employee($id){
        $employee = Employee::find($id);
        return view('employee.edit',['employee'=>$employee]);
    }

   public function destroyemployee($id=0){
    if(!empty($id)){
        $deleteEmployee=$this->employeeServices->getDetailUsers($id);
        if(!empty($deleteEmployee[0])){
            $deleteStatus = $this->employeeServices->destroyemployee($id);
            if($deleteStatus){
                $msg='Delete User Success';
            }else{
                $msg='You Cannot Delete. Please Try Again';
            }
        }else{
            $msg='Delete Donot Exist';
        }
    }else{
        $msg='Link Doesnot Exist';

    }
    return redirect()->route('listemploye')->with('msg',$msg);

        }
    }
   
 


 