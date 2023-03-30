<?php

namespace App\Http\Services\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;

class CustomerServices {

    protected $table = 'customers';
    public function create($request){

        try {
         
            Customer::create([
                'employeid' => (int) $request->input('employeid'),
                'customername' => (string) $request->input('customername'),
                'address' => (string) $request->input('address'),
                'phone' => (string) $request->input('phone'),
                'email' => (string) $request->input('email'),
                'status' => (int) $request->input('status'),


            ]);

            Session::flash('success','Tạo Customer thành công');

        } catch (\Exception $err) {
          Session::flash('error',$err->getMessage()); 
          return false;
        }

        return true;
    }
  
    public function getDetailCustomer($id){
        return DB::select('SELECT * FROM customers WHERE id =?', [$id]);
    }

    public function destroycustomer($id){
        return DB::delete("DELETE FROM $this->table WHERE id=?", [$id]);
     }
}