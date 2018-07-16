

@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-12 justify-content-center">
     
       <div class="col-md-8">
    
    <h1 class="page-header">
        New Product
     </h1>

<form action="{{ route('team') }}" method="POST" enctype="multipart/form-data">
{!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
{!! method_field('POST') !!}

<div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }}">
<input type="file" class="form-control" id="image-file" name="image-file">
@if($errors->has('image-file'))
   <span class="help-block">
       <strong>{{ $errors->first('image-file') }}</strong>
   </span>
@endif
</div>

<div class="form-group has-feedback">
<input type="text" class="form-control" id="id" name="id" 
placeholder="id" value="{{ old('id') }}">
</div>





<button class="form-control btn btn-primary">
Send
</button>
</form>

</div>


      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')










              