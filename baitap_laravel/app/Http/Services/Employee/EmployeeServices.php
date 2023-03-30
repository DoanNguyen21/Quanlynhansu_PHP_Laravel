<?php

namespace App\Http\Services\Employee;

use App\Models\Employee;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;

class EmployeeServices {

    protected $table = 'users';

    public function create($request){
 
    
        try {
         
            Employee::create([
  
                'fullname' => (string) $request->input('fullname'),
                'phone' => (string) $request->input('phone'),
                'email' => (string) $request->input('email'),
                'address' => (string) $request->input('address'),
                'username' => (string) $request->input('username'),
                'password' => (string)bcrypt($request->input('password')),
                'confirmpassword' => (string) $request->input('confirmpassword'),
                'avatar' => (string) $request->input('avatar'),
                'roles' => (int) $request->input('roles'),


            ]);

            Session::flash('success','Tạo Employee thành công');

        } catch (\Exception $err) {
          Session::flash('error',$err->getMessage()); 
          return false;
        }

        return true;
    }

    public function getDetailUsers($id){
        return DB::select('SELECT * FROM users WHERE id =?', [$id]);
    }

    public function destroyemployee($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?", [$id]);
     }
}