@extends('admin.layout.master')
@section('title' , 'Edit')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <h1 class="h3 mb-4 text-gray-800">Edit sliders</h1>
 <form action="{{ route('admin.sliders.update' , $sliders->id)  }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>title</label>
        <input type="text" class="form-control @error('title') is-invalid
         @enderror" placeholder="title" value="{{ old('title', $sliders->title) }}" name="title">
        @error('title')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        <img src="{{ asset('uploads/'.$sliders->image) }}" width="80" alt="">
        @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>content</label>
        <textarea name="content" class=" textarea @error('content') is-invalid @enderror" 
        placeholder="content"  >
        {{ old('content' , $sliders->content) }}
        </textarea>
        @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
    </div>
    
    @if($sliders->status == 1)
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