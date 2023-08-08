@extends('admin.layout.master')
@section('title' , 'create')
@section('content')
@section('H1' , 'Add featurs')

 <!-- Content Wrapper. Contains page content -->
 <form action="{{ route('admin.featurs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    				
    <div class="mb-3">
        <label>title</label>
        <input type="text" class="form-control @error('maintitle') is-invalid
         @enderror" placeholder="title" value="{{ old('maintitle') }}" name="title">
        @error('title')
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
        {{ old('description') }}"
        </textarea>
        @error('description')
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