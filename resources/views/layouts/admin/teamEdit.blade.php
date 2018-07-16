@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
      <div class="col-md-8">
    
    <h1 class="page-header">
       Team Member
     </h1>

     <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
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
<div class="form-group has-feedback">
<input type="text" class="form-control" id="title1" name="title1" placeholder="Title 1" value="{{ $team->name }}">
</div>
<div class="form-group has-feedback">
<input type="text" class="form-control" id="title2" name="title2" placeholder="Title 2" value="{{ $team->cargo }}">
</div>


<div class="form-group has-feedback">
<textarea class="form-control" id="descripcion" name="descripcion" >{{ $team->message }}</textarea>
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
