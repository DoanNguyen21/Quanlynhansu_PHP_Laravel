@extends('admin.main')
@section('content')
<div class="card-body">
<table id="example2" class="table table-bordered table-hover">
<thead>
<tr>
<th>STT</th>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th>Status</th>
<th>Roles</th>
<th style="text-align:center ;">Function</th>

</tr>
</thead>
<tbody>
    @if(!empty($employee))
    @foreach ($employee as $key =>$item)
        <tr>
            <td>
                {{$key + 1}}
            </td>
            <td>{{$item->fullname}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td>
                @if($item->status == 0 )
                <span>Active</span>
                @else
                <span>Deactive</span>
                @endif
            </td>
            <td>
                @if($item->roles == 0)
                <span>Employee</span>
                @elseif($item->roles == 1)
                <span>Admin</span>
                @endif
            </td>
           
                   <div>
                   <td class="project-actions text-center">
                          <a class="btn btn-info btn-sm" href="/admin/menus/edit/'. $item->id .'"  >
                              <i class="fas fa-pencil-alt">
                              </i>
                          </a>
                          <a  onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{route('destroyemployee', ['id' => $item->id]) }}" class="btn btn-danger btn-sm" onclick="removeRow('. $item->id .', \'/admin/menus/destroyemployee\')">
                              <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td> 
                
                      
       </tr>
       @endforeach
       @endif
</tbody>


@endsection