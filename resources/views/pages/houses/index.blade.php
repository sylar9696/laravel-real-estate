@extends('layouts.layout')


@section('content')

<div class="row row-cols-3 g-3">
    @forelse ( $houses as $key => $house )
        <div>
            <div class="col card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $house->address }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $house->price }}</h6>
                    <p class="card-text">{{ $house->description }}</p>
                    <a href=" {{ route('house', [ 'id' => $house->id ]) }} " class="card-link">Card link</a>
                </div>
            </div>
        </div>
    @empty
        <h2>Non ci sono ancroa case in vendita</h2>
    @endforelse
</div>


@endsection
