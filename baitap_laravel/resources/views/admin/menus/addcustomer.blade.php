@extends('admin.main')
@section('content')
 
<form action="{{route('addCustomer')}}" method="post">
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="customername">Employee Names</label>
                        <input type="text" class="form-control" name="" value="{{$user->fullname}}" placeholder="Enter customers" readonly>
                        <input type="hidden" class="form-control" name="employeid" value="{{$user->id}}" placeholder="Enter customers">
                        <span style="color: red" class="error-message">{{ $errors->first('fullname') }}</span></p>
                      </div>
    

                  <div class="form-group">
                    <label for="customername">Customers Names</label>
                    <input type="customername" class="form-control" name="customername" placeholder="Enter customers">
                    <span style="color: red" class="error-message">{{ $errors->first('fullname') }}</span></p>
                  </div>


                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" class="form-control" name="address" placeholder="address">
                    <span style="color: red" class="error-message">{{ $errors->first('address') }}</span></p>

                  </div>


                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" name="phone" placeholder="phone">
                    <span style="color: red" class="error-message">{{ $errors->first('phone') }}</span></p>
                  </div>


                   <div class="form-group">
                    <label for="email">Mail</label>
                    <input type="email" class="form-control" name="email" placeholder="mail">
                    <span style="color: red" class="error-message" >{{ $errors->first('email') }}</span></p>
                  </div>


                  
                 
                          

                  <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status">
                        <option value="0">Active</option>
                        <option value="1">Deactive</option>
                    </select>
                  
                  </div>
                  <span class="error-message">{{ $errors->first('status') }}</span></p>
                

                </div>
                
                <!-- /.card-body -->
               
               <div class="button-addcustomer">
               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="card-footer">
                  <button type="cancle" class="btn btn-primary" style="background-color: #ccc; border:none ; color:black">Cancel</button>
                </div>
               </div>

               @csrf  

              </form>

              <style>
                .button-addemployee{
                    display: flex;    
                   }
                   
                
              </style>

@endsection