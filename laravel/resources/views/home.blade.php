@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                @foreach($image as $images)
                    <div class="card" id="image">
                        <a href="{{ url('images/' . $image->name) }}" class="image-link">
                            <img class="card-img-top"
                                 src="{{ url('thumbs/' . $image->name) }}"
                                 alt="image">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
