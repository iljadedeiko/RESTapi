@extends('layout')

@section('title-block') Update Item @endsection

@section('main-content')
    <h2 class="mb-4">All Items</h2>
    @if(session('successItm'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('successItm') }}
        </div>
    @endif
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
            <td><a href="{{ route('one-item', $itm->id) }}"><button class="btn btn-success">Update</button></a></td>
        </tr>
        @endforeach
{{--        <div class="form-group">--}}
{{--            <label for="category">Select Category of Items</label>--}}
{{--            <select name="categoryName" class="form-control">--}}
{{--                @foreach($dataCtgr as $ctrgs)--}}
{{--                    <option value="{{ $ctrgs->id }}">{{ $ctrgs->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
        </tbody>
    </table>
@endsection

