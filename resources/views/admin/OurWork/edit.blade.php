@extends('admin.layout.master')
@section('title' , 'Edit')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">Edit works</h1>
 <form action="{{ route('admin.ourwork.update' , $works->id)  }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>maintitle</label>
        <input type="text" class="form-control @error('maintitle') is-invalid
         @enderror" placeholder="maintitle" value="{{ old('title', $works->maintitle) }}" name="maintitle">
        @error('maintitle')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        <img src="{{ asset('uploads/'.$works->image) }}" width="80" alt="">
        @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>description</label>
        <textarea name="description" class=" textarea @error('description') is-invalid @enderror" 
        placeholder="description"  >
        {{ old('description' , $works->description) }}
        </textarea>
        @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
    </div>
    <div class="mb-3">
        <label>titlework</label>
        <input type="text" class="form-control @error('titlework') is-invalid
         @enderror" placeholder="titlework" value="{{ old('title', $works->titlework) }}" name="titlework">
        @error('titlework')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>likework</label>
        <input type="text" class="form-control @error('likework') is-invalid
         @enderror" placeholder="likework" value="{{ old('title', $works->likework) }}" name="likework">
        @error('likework')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    @if($works->status == 1)
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