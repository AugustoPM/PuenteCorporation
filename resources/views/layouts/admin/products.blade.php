@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
      <div class="col-md-8">
    
    <h1 class="page-header">
        Our Products
     </h1>


<!-- <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> 
</div> -->


<a href="{{ route('product.create') }}" class="btn btn-success">
   <i class="glyphicon glyphicon-list"></i> New Product image
   </a>

   <a href="{{ route('Admin') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-list"></i> Back
   </a>

<hr>

<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Img</th>
   
    
   
    <th colspan="2">Actions</th>
</tr>

@foreach($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->img }}</td>

                         

<td>
   
    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary">
        <i class="glyphicon glyphicon-edit">Edit</i>
   </a>
</td>
<td>
    <button class="btn btn-danger" data-action="{{ route('product.destroy',$product->id) }}" data-name="{{ $product->id }}" data-toggle="modal"
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
                            <p>Sure you want to delete this Product?</p>
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
