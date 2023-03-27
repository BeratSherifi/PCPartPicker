@extends('gpus.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit GPU</div>
    <div class="card-body">


    <form action="{{url('gpu/' . $gpus->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$gpus->id}}" id="id" />
        <label>Name</label><br />
        <input type="text" name="name" id="name" value="{{$gpus->name}}" class="form-control"><br />
        <label>Core Clock</label><br/>
        <input type="text" name="core_clock" id="core_clock" value="{{$gpus->core_clock}}" class="form-control"><br />
        <label>Boost Clock</label>
        <input type="text" name="boost_clock" id="boost_clock" value="{{$gpus->boost_clock}}" class="form-control"><br />
        <label>Memory</label>
        <input type="text" name="memory" id="memory" value="{{$gpus->memory}}" class="form-control"><br />
        <label>Memory Type</label>
        <input type="text" name="memory_type" id="memory_type" value="{{$gpus->memory_type}}" class="form-control"><br />
        <label>Memory Clock</label>
        <input type="text" name="memory_clock" id="memory_clock" value="{{$gpus->memory_clock}}" class="form-control"><br />
        <label>Interface</label>
        <input type="text" name="interface" id="interface" value="{{$gpus->interface}}" class="form-control"><br />
        <label>Price</label>
        <input type="text" name="price" id="price" value="{{$gpus->price}}" class="form-control"><br />
        
        <input type="submit" value="Update" class="btn btn-success"> <br />
    </form>
</div>
</div>

@stop