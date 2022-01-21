@extends('layouts.main')

@section('title')
    Category Form
@endsection

@section('content')
    <div class="row pt-3">
        <h1 class="text-center">{{$category['name']}}</h1>
    </div>
    <div class="row pt-3 pb-3">
    @foreach($news as $id =>$item)
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{$item['img'] ?? 'https://via.placeholder.com/800x500'}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['title']}}</h5>
                        <p class="card-text">{{$item['description']}}</p>
                        <a href="{{route('news::show',['id'=>$id])}}" class="btn btn-primary">Go to news</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
