@extends('admin.layout.master')
@section('title' , 'create')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">Add services</h1>
 <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>maintitle</label>
        <input type="text" class="form-control @error('maintitle') is-invalid
         @enderror" placeholder="maintitle" value="{{ old('maintitle') }}" name="maintitle">
        @error('maintitle')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label>description</label>
        <textarea  class=" custom-editor form-control textarea @error('description') is-invalid 
        @enderror" placeholder="description" name="description">
        {{ old('description') }}
        </textarea>
        @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
    </div>
   
    <div class="mb-3">
        <label>titleserv</label>
        <input type="text" class="form-control @error('titleserv') is-invalid 
        @enderror" placeholder="titleserv" value="{{ old('titleserv') }}" name="titleserv">
        @error('titleserv')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <button class="btn btn-success"><i class="fas fa-save"></i> Save</button>
</form>
@endsection
@push('scripts')


 
<script>
    tinymce.init({
        selector: '.textarea',
        plugins : ['code']
        
    })
</script>
@endpush