@extends('admin.layout.master')
@section('title' , 'Edit')
@section('content')
@section('H1' , 'Edit featurs')

 <!-- Content Wrapper. Contains page content -->
 <form action="{{ route('admin.featurs.update' , $featurs->id)  }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>title</label>
        <input type="text" class="form-control @error('title') is-invalid
         @enderror" placeholder="title" value="{{ old('title', $featurs->title) }}" name="title">
        @error('title')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        <img src="{{ asset('uploads/'.$featurs->image) }}" width="80" alt="">
        @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label>description</label>
        <textarea name="description" class=" textarea @error('description') is-invalid @enderror" 
        placeholder="description"  >
        {{ old('description' , $featurs->description) }}
        </textarea>
        @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
    </div>
    @if($featurs->status == 1)
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