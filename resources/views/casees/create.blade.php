@extends('casees.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Add New CASE</div>

    <div class="card-body">
        <form action="{{ url('casee') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />
            <label>Type</label><br/>
            <input type="text" name="type" id="type" class="form-control"><br />
            <label>Color</label>
            <input type="text" name="color" id="color" class="form-control"><br />
            <label>Material</label>
            <input type="text" name="material" id="material" class="form-control"><br />
            <label>Dimensions</label>
            <input type="text" name="dimensions" id="dimensions" class="form-control"><br />
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control"><br />
            
            <input type="submit" value="Save" class="btn btn-success"><br />
        </form>

    </div>

</div>

@stop
