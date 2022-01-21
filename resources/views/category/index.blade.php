@extends('layouts.main')

@section('title')
    Category
@endsection

@section('content')
    <div class="row pt-3 pb-3">
        <div class="list-group">
            @foreach($categories as $id => $item)
                <a href="{{route('category::show',['id'=>$id])}}" class="list-group-item list-group-item-action">{{$item['name']}}</a>
            @endforeach
        </div>
    </div>
@endsection
