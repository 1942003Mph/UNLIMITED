@extends('admin.layout.master')
@section('title' , 'services')
@section('content')
@section('H1' , 'All services')

 <!-- Content Wrapper. Contains page content -->
 <div class="d-flex justify-content-center align-items-center mb-3">
    <a href="{{ route('admin.services.create') }}" class="btn btn-dark">Add services</a>
</div>


 @if (session('msg'))
    <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif

    <form action="{{ route('admin.services.index') }}" method="GET">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" 
            value="{{ request()->search }}" placeholder="Search using titleserv ..." >
            <button class="btn btn-primary" id="button-addon2">Search</button>
        </div>
    </form>

{{-- <form action="{{ route('admin.caregory.index') }}" method="GET">
    <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" value="{{ request()->search }}" placeholder="Search about anything ..." >
        <button class="btn btn-primary" id="button-addon2">Search</button>
    </div>
</form> --}}
        <div class="row">
            <table class="table table-hover table-bordered table-striped">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>maintitle</th>
                    <th>description	</th>
                    <th>titleserv</th>
                    <th>status</th>
                    <th>image</th>
                    <th>Created At</th>  
                    <th>Action</th>  
                </tr>
            
            @forelse ($services as $servic)
    <tr>
        <td>{{ $servic->id }}</td>
        <td>{{ $servic->maintitle }}</td>
        <td>{!! $servic->description !!}</td>
        <td>{{ $servic->titleserv }}</td>
        <td>@if($servic->status == 1) 
            active 
            @else
             inactive 
            @endif</td>
        <td><img src="{{ asset('uploads/'.$servic->image) }}" width="80" alt=""></td>
        <td>{{ $servic->created_at->format('d F, Y - h:m:s A') }}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.services.edit', $servic->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <form class="d-inline" action="{{ route('admin.services.destroy', $servic->id) }}" method="POST">
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
{{ $services->appends($_GET)->links() }}
@endsection
@push('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
     $('#search').on('keyup',function() {
     }); 
    </script>

@endpush