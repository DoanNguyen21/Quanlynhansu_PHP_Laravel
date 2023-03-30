@extends('admin.main')
@section('content')
<form action="" method="post">
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="fullname">Full Names</label>
                    <input type="fullname" class="form-control" name="fullname" placeholder="Enter fullname">
                    <span style="color: red" class="error-message">{{ $errors->first('fullname') }}</span></p>
                  </div>

                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" name="phone" placeholder="phone">
                    <span style="color: red" class="error-message">{{ $errors->first('phone') }}</span></p>
                  </div>
                  
                  <div class="form-group">
                    <label for="email">Mail</label>
                    <input type="email" class="form-control" name="email" placeholder="mail">
                    <span style="color: red" class="error-message">{{ $errors->first('email') }}</span></p>
                  </div>
                  
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" class="form-control" name="address" placeholder="address">
                    <span style="color: red" class="error-message">{{ $errors->first('address') }}</span></p>

                  </div>
                  
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" name="username" placeholder="username">
                    <span style="color: red" class="error-message">{{ $errors->first('username') }}</span></p>

                  </div>
                  
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <span style="color: red" class="error-message">{{ $errors->first('password') }}</span></p>

                  </div>
                  
                  <div class="form-group">
                    <label for="confirmpassword">Confirm password</label>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="confirm password">
                    <span style="color: red" class="error-message">{{ $errors->first('confirmpassword') }}</span></p>

                  </div>

                  <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="avatar" class="custom-file-input" name="avatar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    <!-- <span class="error-message">{{ $errors->first('avatar') }}</span></p> -->

                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="roles">Roles</label>
                    <select class="form-control" name="roles">
                        <option value="0">Employee</option>
                        <option value="1">Admin</option>
                    </select>
                  
                  </div>
                  <span class="error-message">{{ $errors->first('roles') }}</span></p>
                

                </div>
                
                <!-- /.card-body -->
               
               <div class="button-addemployee">
               <div class="card-footer">
                  <button type="save" class="btn btn-primary">Save

                  </button>
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

@section('footer')

 <script>
    CKEDITOR.replace('content');
 </script>
 @endsection