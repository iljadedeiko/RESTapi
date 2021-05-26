@extends('layout')

@section('title-block') Update Item @endsection

@section('main-content')
    <h2 class="mb-4">All Items</h2>

    @if(session('successItm'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('successItm') }}
        </div>
    @endif

    @if(session('deleteCat'))
        <div class="alert alert-danger mt-3" role="alert">
            {{ session('deleteCat') }}
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
            <td>{{ $itm->category_name }}</td>
            <td>{{ $itm->name }}</td>
            <td>{{ $itm->value }}</td>
            <td>{{ $itm->quality }}</td>
            <td>{{ $itm->created_at }}</td>
            <td>{{ $itm->updated_at }}</td>
            <td><a href="{{ route('one-item', $itm->id) }}"><button class="btn btn-success">Update</button></a></td>
        </tr>
        @endforeach
        <div class="container">
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="category">Select Category of Items</label>
                    <select name="categoryName" class="form-control">
                        @foreach($dataItm as $ctrgs)
                            <option value="{{ $ctrgs->cat_id }}">{{ $ctrgs->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-lg-3">
                        <a href="{{ route('category-delete', $ctrgs->id) }}"><button class="btn btn-danger mt-4">Delete Category</button></a>
                </div>
            </div>
        </div>
        </tbody>
    </table>
@endsection

