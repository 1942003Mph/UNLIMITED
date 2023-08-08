@extends('admin.layout.master')
@section('title' , 'teams')
@section('content')
@section('H1' , 'All teams')
 <!-- Content Wrapper. Contains page content -->
 <div class="d-flex justify-content-center align-items-center mb-3">
    <a href="{{ route('admin.teams.create') }}" class="btn btn-dark">Add teams</a>
</div>


 @if (session('msg'))
    <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif


    <form action="{{ route('admin.teams.index') }}" method="GET">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" 
            value="{{ request()->search }}" placeholder="Search using name..." >
            <button class="btn btn-primary" id="button-addon2">Search</button>
        </div>
    </form>
    


{{-- <form action="{{ route('admin.caregory.index') }}" method="GET">
    <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" value="{{ request()->search }}" placeholder="Search about anything ..." >
        <button class="btn btn-primary" id="button-addon2">Search</button>
    </div>
</form> --}}
name	image	job	description
        <div class="row">
            <table class="table table-hover table-bordered table-striped">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>name</th>
                    <th>description	</th>
                    <th>job</th>
                    <th>status</th>
                    <th>image</th>
                    <th>Created At</th>  
                    <th>Action</th>  
                </tr>
            
            @forelse ($teams as $team)
    <tr>
        <td>{{ $team->id }}</td>
        <td>{{ $team->name }}</td>
        <td>{!! $team->description !!}</td>
        <td>{{ $team->job }}</td>
        <td>@if($team->status == 1) 
            active 
            @else
             inactive 
            @endif</td>
        <td><img src="{{ asset('uploads/'.$team->image) }}" width="80" alt=""></td>
        <td>{{ $team->created_at->format('d F, Y - h:m:s A') }}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.teams.edit', $team->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <form class="d-inline" action="{{ route('admin.teams.destroy', $team->id) }}" method="POST">
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
{{ $teams->appends($_GET)->links() }}
@endsection
@push('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
     $('#search').on('keyup',function() {
     }); 
    </script>

@endpush