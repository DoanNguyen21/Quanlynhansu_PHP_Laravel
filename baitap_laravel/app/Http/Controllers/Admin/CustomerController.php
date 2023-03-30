<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerRequest;
use App\Http\Services\Customer\CustomerServices;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{

    protected $customerServices;

    public function __construct(CustomerServices $customerServices){
        $this->customerServices = $customerServices;
    }
  
    public function create_customer(){
        $user = Auth::user();
        return view ('admin.menus.addcustomer',[
            'title' => 'Thêm Customer Mới',
            'user' => $user
        ]);
    }

    public function customer(CustomerRequest $request ) {
       $this->customerServices->create($request);

       return redirect()->route('listcustomer');
    }

    public function index2(){
        $customer = Customer::all();

       return view('admin.menus.listcustomer', [
           'title' => 'Danh sách Customer',
           'customer' => $customer
       ]);
   }

   public function edit_customer($id){
       $customer = Customer::find($id);
       return view('customer.edit',['customer'=>$customer]);
   }

   public function destroycustomer($id=0){
    if(!empty($id)){
        $deleteCustomer=$this->customerServices->getDetailCustomer($id);
        if(!empty($deleteCustomer[0])){
            $deleteStatus = $this->customerServices->destroycustomer($id);
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
    return redirect()->route('listcustomer')->with('msg',$msg);

        }
}
