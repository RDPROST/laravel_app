@extends('layouts.main')

@section('title')
    {{$news['title']}}
@endsection

@section('content')
    <div class="row pt-3 pb-3">
        <div class="card col-12">
            <img src="{{$news['img']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$news['title']}}</h5>
                <p class="card-text">{{$news['description']}}</p>
            </div>
        </div>
    </div>
@endsection
