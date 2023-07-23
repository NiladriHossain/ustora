@extends('backend.master')

@section('content')
    <section class="w-100">
        <h1 class="text-center py-3 m-0 bg-secondary text-light w-100" >Manage Categories</h1>
        <table class="table table-striped text-center border-2 text-bold">
            <thead class="bg-dark text-light">
                <th>Id</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Action</th>
            </thead>
            @foreach ($categories as $categoriy)
                
            <tr class="" >
                <td>{{$categoriy->id}}</td>
                <td>{{$categoriy->name}}</td>
                <td>{{$categoriy->desc}}</td>
                <td class="float-left">
                    <a href="" type="button" class="btn btn-success m-2">Edit</a>
                    <a href="" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </section>

@endsection