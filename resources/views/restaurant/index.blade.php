@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach($restaurants as $restaurant)
            <div class="card">
                <div class="card-header">
                    {{ $restaurant->name }}
                </div>
                <div class="card-body">
                    <b>{{ $restaurant->location }}</b>
                    <p>{{ $restaurant->phone }}</p>
                    <small>{{ $restaurant->food_type }}</small>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
