@extends('admin.layout.master')
@section('title' , 'featurs')
@section('content')
@section('H1' , 'All featurs')

 <!-- Content Wrapper. Contains page content -->
 <div class="sear d-flex justify-content-between">
    <form action="{{ route('admin.featurs.index') }}" method="GET">
        <div class="input-group mb-3">
            <input name="search" type="text" class="form-control" 
            value="{{ request()->search }}" placeholder="Search using title ..." >
            <button class="btn btn-success" id="button-addon2">Search</button>
        </div>
    </form>
    <div class=" mb-3">
        <a href="{{ route('admin.featurs.create') }}" class="btn btn-success" style="width: 180px;">Add featurs<i class="fa-solid fa-plus"></i></a>
    </div>
     
 </div>
 @if (session('msg'))
 <div class="block alert alert-{{ session('type') }}">{{ session('msg') }}</div>
@endif


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
                    <th>title</th>
                    <th>description	</th>
                    <th>status</th>
                    <th>image</th>
                    <th>Created At</th>  
                    <th>Action</th>  
                </tr>
            
            @forelse ($featurs as $featur)
    <tr>
        <td>{{ $featur->id }}</td>
        <td>{{ $featur->title }}</td>
        <td>{!! $featur->description !!}</td>
        <td>@if($featur->status == 1) 
            active 
            @else
             inactive 
            @endif</td>
        <td><img src="{{ asset('uploads/'.$featur->image) }}" width="80" alt=""></td>
        <td>{{ $featur->created_at->format('d F, Y - h:m:s A') }}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.featurs.edit', $featur->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <form class="d-inline" action="{{ route('admin.featurs.destroy', $featur->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
            </form>
        </td> 
    </tr>
    @empty
    <tr>
        <td colspan="8" class="text-center">No Data Available <a href="{{ route('admin.featurs.create') }}"><i class="fa-regular fa-square-plus fa-lg"></i></a></td>
    </tr>
    @endforelse
</table>
{{ $featurs->appends($_GET)->links() }}
@endsection
