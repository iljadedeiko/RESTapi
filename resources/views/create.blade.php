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
        <h3 class="mb-3">Create Item</h3>
        <form action="{{ route('item-form') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="category">Select Category of Items</label>
                <select name="categoryName" class="form-control">
                    <option></option>
                </select>

            </div>

            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" name="name" placeholder="Name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="value">Value of Items</label>
                <input type="number" step="0.01" name="value" placeholder="Value" id="value" class="form-control">
            </div>

            <div class="form-group">
                <label for="quality">Item quality</label>
                <input type="number" name="quality" placeholder="Quality" id="quality" class="form-control">
            </div>

            <button type="submit" class="btn btn-success mb-5" name="buttonItm">Add</button>
        </form>

        @if(session('successItm'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('successItm') }}
            </div>
        @endif
    </div>

    <div class="col-lg-3" style="margin-left:10rem">
        <h3 class="mb-3">Create Category</h3>
        <form action="{{ route('category-form') }}" method="post">
            @csrf
            <div class="form-group">
               <label for="value">Category Name</label>
               <input type="text" name="cat_name" placeholder="Category" id="cat_name" class="form-control">
            </div>

            <button type="submit" class="btn btn-success" name="buttonCtgr">Add</button>
        </form>

        @if(session('successCtgr'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('successCtgr') }}
            </div>
        @endif
    </div>

   </div>
</div>

@endsection
