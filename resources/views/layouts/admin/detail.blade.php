@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
          
      <div class="col-md-8">
    
    <h1 class="page-header">
        Count
         
     </h1>


<!-- <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> 
</div> -->


   

   <a href="{{ route('Admin') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-list"></i> Back
   </a>

<hr>

<table class="table table-bordered">
<tr>
    <th>#</th>
    
    <th>Title </th>
    <th>Number</th>
    <th>Icon</th>
   
    
   
    <th colspan="2">Actions</th>
</tr>

@foreach($details as $detail)
<tr>
<td>{{ $detail->id }}</td>

<td>{{ $detail->title }}</td>
<td>{{ $detail->num }}</td>
<td>{{ $detail->icon }}</td>




<td>
   
    <a href="{{ route('detail.edit',$detail->id) }}" class="btn btn-primary">
        <i class="glyphicon glyphicon-edit">Edit</i>
   </a>
</td>

</tr>


@endforeach


</table>
</div>
      </div>
      
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')
