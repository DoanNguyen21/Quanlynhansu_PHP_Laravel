@extends('admin.main')
@section('content')
<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
    <th>STT</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Gmail</th>
    <th style="text-align:center ;">Function </th>
   

    </tr>
    
    </thead>
    <tbody>
       @if(!empty($customer))
       @foreach($customer as $key=> $item)
       <tr>
       <td>
        {{$key + 1}}
       </td>
       <td> {{$item->customername}}</td>
       <td>{{$item->phone}}</td>
       <td>{{$item->email}}</td>
    <div>
    <td class="project-actions text-center">
           <a class="btn btn-info btn-sm" href="#">
               <i class="fas fa-pencil-alt">
               </i>
           </a>
           <a  onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('destroycustomer', ['id' => $item->id]) }}" class="btn btn-danger btn-sm" onclick="removeRow('. $item->id .', \'/admin/menus/destroycustomer\')">
            <i class="fas fa-trash"></i>
        </a>
         </div>
       </td> 
   

       </tr>
    
    </tbody>

   @endforeach
   @endif
@endsection