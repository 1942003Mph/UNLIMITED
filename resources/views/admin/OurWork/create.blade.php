@extends('admin.layout.master')
@section('title' , 'create')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">Add OurWork</h1>
 <form action="{{ route('admin.ourwork.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    				
    <div class="mb-3">
        
        <label>titlework</label>
        <input type="text" class="form-control @error('maintitle') is-invalid
         @enderror" placeholder="maintitle" value="{{ old('titlework') }}" name="titlework">
        @error('titlework')
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
    {{-- <div class="mb-3">
        <label>titlework</label>
        <input type="text" class="form-control @error('titlework') is-invalid 
        @enderror" placeholder="titlework" value="{{ old('titlework') }}" name="titlework">
        @error('titlework')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div> --}}
    <div class="mb-3">
        <label>likework</label>
        <input type="text" class="form-control @error('likework') is-invalid 
        @enderror" placeholder="likework" value="{{ old('likework') }}" name="likework">
        @error('likework')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label>maintitle</label>
        <input type="text" class="form-control @error('maintitle') is-invalid 
        @enderror" placeholder="maintitle" value="{{ old('maintitle') }}" name="maintitle">
        @error('maintitle')
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