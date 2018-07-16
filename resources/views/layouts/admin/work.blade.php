@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
      <div class="col-md-8">
    
    <h1 class="page-header">
        Our Work
     </h1>


<!-- <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> 
</div> -->


<a href="{{ route('work.create') }}" class="btn btn-success">
   <i class="glyphicon glyphicon-list"></i> New work
   </a>

   <a href="{{ route('Admin') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-list"></i> Back
   </a>

<hr>

<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Icon</th>
    <th>Title</th>
    <th>Text</th>
    
    
   
    <th colspan="2">Actions</th>
</tr>

@foreach($works as $work)
<tr>
<td>{{ $work->id }}</td>
<td>{{ $work->icon }}</td>
<td>{{ $work->title }}</td>
<td>{{ $work->text }}</td>

                         

<td>
   
    <a href="{{ route('work.edit',$work->id) }}" class="btn btn-primary">
        <i class="glyphicon glyphicon-edit">Edit</i>
   </a>
</td>
<td>
    <button class="btn btn-danger" data-action="{{ route('work.destroy',$work->id) }}" data-name="{{ $work->title }}" data-toggle="modal"
     data-target="#confirm-delete">
         <i class="glyphicon glyphicon-trash">Delete</i>
    </button>
                  
</td>
</tr>


@endforeach


</table>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1"   role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">
                            <p>Sure you want to delete this work?</p>
                            <p class="nombre"></p>
                        </div>
                        <div class="modal-footer">
                            <form class="form-inline form-delete"
                                  role="form"
                                  method="POST"
                                  action="">
                                {!! method_field('DELETE') !!}
                                {!! csrf_field() !!}
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Back
                                </button>
                                <button id="delete-btn"
                                        class="btn btn-danger"
                                        title="Eliminar">DELETE 
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>  
      
      </div>
      
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')
