@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
      <div class="col-md-8">
    
    <h1 class="page-header">
      Products Images
     </h1>

     <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
{!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
{!! method_field('PUT') !!}
<div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }}">
<input type="file" class="form-control" id="image-file" name="image-file">
@if($errors->has('image-file'))
<span class="help-block">
<strong>{{ $errors->first('image-file') }}</strong>
</span>
@endif
</div>




<button class="form-control btn btn-warning">
Save
</button>
</form>
      </div>
      
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')
