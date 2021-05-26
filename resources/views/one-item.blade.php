@extends('layout')

@section('title-block') Create Item or Category @endsection

@section('main-content')
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger center col-lg-5">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-3">
                <h2 class="mb-3">Update Item</h2>
                <form action="{{ route('updated-item-submit', $data->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category">Select Category of Items</label>
                        <select name="categoryName" class="form-control">
{{--                            @foreach($data as $ctrgs)--}}
                                <option value="{{ $data->id }}">{{ $data->category_name }}</option>
{{--                            @endforeach--}}
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="name">Item Name</label>
                        <input type="text" name="name" placeholder="Name" id="name" value="{{ $data->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="value">Value of Items</label>
                        <input type="number" step="0.01" name="value" placeholder="Value" value="{{ $data->value }}" id="value" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="quality">Item quality</label>
                        <input type="number" name="quality" placeholder="Quality" id="quality" value="{{ $data->quality }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success mb-5" name="buttonItm">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
