@extends('layout')

@section('title-block') Create Item or Category @endsection

@section('main-content')
<div class="container">
   <div class="row">
    <div class="col-lg-3">
        <h3 class="mb-3">Create Item</h3>
        <form action="/item/submit" method="post">
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" name="name" placeholder="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="value">Value of Items</label>
                <input type="number" step="0.01" name="value" placeholder="Value" id="value" class="form-control">
            </div>

            <div class="form-group">
                <label for="quality">Item quality</label>
                <input type="number" name="quality" placeholder="Quality" id="quality" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>


    <div class="col-lg-3" style="margin-left:10rem">
        <h3 class="mb-3">Create Category</h3>
        <form action="/category/submit" method="post">
            <div class="form-group">
               <label for="value">Category Name</label>
               <input type="text" name="cat_name" placeholder="Category Name" id="cat_name" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>

   </div>
</div>

@endsection
