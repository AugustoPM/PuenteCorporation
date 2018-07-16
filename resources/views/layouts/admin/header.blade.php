@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
          
      <div class="col-md-8">
    
    <h1 class="page-header">
        Header
         
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
    <th>Logo</th>
    <th>Title 1</th>
    <th>Title 2</th>
    <th>Title 3</th>
    <th>Subtitle 1</th>
    <th>Subtitle 2</th>
    <th>Subtitle 3</th>
    <th>Description</th>
    
   
    <th colspan="2">Actions</th>
</tr>

@foreach($headers as $header)
<tr>
<td>{{ $header->id }}</td>
<td>{{ $header->logo }}</td>
<td>{{ $header->title1 }}</td>
<td>{{ $header->title2 }}</td>
<td>{{ $header->title3 }}</td>
<td>{{ $header->subtitle1 }}</td>
<td>{{ $header->subtitle2 }}</td>
<td>{{ $header->subtitle3 }}</td>
<td>{{ $header->desc }}</td>



<td>
   
    <a href="{{ route('header.edit',$header->id) }}" class="btn btn-primary">
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
