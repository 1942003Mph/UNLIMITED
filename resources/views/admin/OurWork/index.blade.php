@extends('admin.layout.master')
@section('title' , 'wwork')
@section('content')
@section('H1' , 'All works')

 <!-- Content Wrapper. Contains page content -->
 <div class="d-flex justify-content-center align-items-center mb-3">
    <a href="{{ route('admin.ourwork.create') }}" class="btn btn-success">Add OurWork <i class="fa-solid fa-plus"></i></a>
</div>


 @if (session('msg'))
    <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif

    <form action="{{ route('admin.ourwork.index') }}" method="GET">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" 
            value="{{ request()->search }}" placeholder="Search using titlework ..." >
            <button class="btn btn-success" id="button-addon2">Search</button>
        </div>
    </form>



        <div class="row">
            <table class="table table-hover table-bordered table-striped">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>maintitle</th>
                    <th>description	</th>
                    <th>image</th>
                    <th>titlework</th>
                    <th>linkwork</th>
                    <th>status</th>
                    <th>Created At</th>  
                    <th>Action</th>  
                </tr>
            
            @forelse ($works as $work)
    <tr>
        <td>{{ $work->id }}</td>
        <td>{{ $work->maintitle }}</td>
        <td>{{ $work->description }}</td>
        {{-- @dd(storage_path()) --}}
        <td><img src="{{  asset('public/'. $work->image) }}" width="80" alt=""></td>
        {{-- {{ ( storage_path().$work->image)  }} --}}
        <td>{{ $work->titlework }}</td>
        <td><a href="{{ $work->linkwork }}">linke </a></td>
        <td>{{ $work->created_at->format('d F, Y - h:m:s A') }}</td>
        <td>@if($work->status == 1) 
            active 
            @else
             inactive 
            @endif</td>
        <td>
            <a class="btn btn-success btn-sm" href="{{ route('admin.ourwork.edit', $work->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <form class="d-inline" action="{{ route('admin.ourwork.destroy', $work->id) }}" method="POST">
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
{{ $works->appends($_GET)->links() }}
@endsection
@push('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
     $('#search').on('keyup',function() {
     }); 
    </script>

@endpush