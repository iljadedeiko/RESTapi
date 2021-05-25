@extends('layout')

@section('title-block') Update Item @endsection

@section('main-content')
    <h2 class="mb-4">All Items</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Item Name</th>
            <th scope="col">Value</th>
            <th scope="col">Quality</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataItm as $itm)
        <tr>
            <th scope="row">{{ $itm->id }}</th>
            <td>{{ $itm->category_id }}</td>
            <td>{{ $itm->name }}</td>
            <td>{{ $itm->value }}</td>
            <td>{{ $itm->quality }}</td>
            <td>{{ $itm->created_at }}</td>
            <td>{{ $itm->updated_at }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

