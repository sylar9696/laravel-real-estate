@extends('layouts.layout')

@section('content')
<div>
    <div class="col card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $house->address }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $house->price }}</h6>
            <p class="card-text">{{ $house->description }}</p>
            <a href="  " class="card-link">Card link</a>
        </div>
    </div>
</div>
@endsection
