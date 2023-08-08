@extends('admin.layout.master')
@section('title' , 'create')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">Add teams</h1>
 <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    				
    <div class="mb-3">
        <label>name</label>
        <input type="text" class="form-control @error('name') is-invalid
         @enderror" placeholder="name" value="{{ old('name') }}" name="name">
        @error('name')
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
        <label>job</label>
        <input type="text" class="form-control @error('job') is-invalid 
        @enderror" placeholder="job" value="{{ old('job') }}" name="job">
        @error('job')
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