@extends('admin.layout.master')
@section('title' , 'Edit')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">Edit teams</h1>
 <form action="{{ route('admin.teams.update' , $teams->id)  }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>name</label>
        <input type="text" class="form-control @error('name') is-invalid
         @enderror" placeholder="name" value="{{ old('title', $teams->name) }}" name="name">
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        <img src="{{ asset('uploads/'.$teams->image) }}" width="80" alt="">
        @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>description</label>
        <textarea name="description" class=" textarea @error('description') is-invalid @enderror" 
        placeholder="description"  >
        {{ old('description' , $teams->description) }}
        </textarea>
        @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
    </div>
    <div class="mb-3">
        <label>job</label>
        <input type="text" class="form-control @error('job') is-invalid
         @enderror" placeholder="job" value="{{ old('title', $teams->job) }}" name="job">
        @error('job')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    @if($teams->status == 1)
    <div class="form-floating" class="mb-3">
        <select name="status" class="form-select"  aria-label="Floating label select example">
          <option  value="1">active</option>
          <option  value="0">inactive</option>
        </select>
      </div>
    @else
        <div class="form-floating" class="mb-3">
            <select name="status" class="form-select"  aria-label="Floating label select example">
              <option  value="0">inactive</option>
              <option  value="1">active</option> 
            </select>
          </div>
    
@endif     



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