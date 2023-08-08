@extends('admin.layout.master')
@section('title' , 'sliders')
@section('content')
@section('H1' , 'All sliders')
 <!-- Content Wrapper. Contains page content -->
 <div class="d-flex justify-content-center align-items-center mb-3">
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-dark">Add sliders</a>
</div>
 @if (session('msg'))
    <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif

<form action="{{ route('admin.sliders.index') }}" method="GET">
    <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" 
        value="{{ request()->search }}" placeholder="Search using title..." >
        <button class="btn btn-primary" id="button-addon2">Search</button>
    </div>
</form>


        <div class="row">
            <table class="table table-hover table-bordered table-striped">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>title</th>
                    <th>content	</th>
                    <th>status</th>
                    <th>image</th>
                    <th>Created At</th>  
                    <th>Action</th>  
                </tr>
            
            @forelse ($sliders as $slider)
    <tr>
        <td>{{ $slider->id }}</td>
        <td>{{ $slider->title }}</td>
        <td>{{ $slider->content }}</td>
        <td>@if($slider->status == 1) 
            active 
            @else
             inactive 
            @endif</td>
        <td><img src="{{ asset('uploads/'.$slider->image) }}" width="80" alt=""></td>
        <td>{{ $slider->created_at->format('d F, Y - h:m:s A') }}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.sliders.edit', $slider->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <form class="d-inline" action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
            </form>
        </td> 
    </tr>
    @empty
    <tr>
        <td colspan="8" class="text-center">No Data Available<a href="{{ route('admin.featurs.create') }}"><i class="fa-regular fa-square-plus fa-lg"></td>
    </tr>
    @endforelse
</table>
{{ $sliders->appends($_GET)->links() }}
@endsection
@push('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
     $('#search').on('keyup',function() {
     }); 
    </script>

@endpush