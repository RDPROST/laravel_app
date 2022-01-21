@extends('layouts.main')

@section('title')
    Admin Create News
@endsection

@section('content')
    <div class="row pt-3 pb-3">
        <form action="{{route('admin::news::create')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title..." required name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Description*</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Description..."
                       required name="description">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Link img*</label>
                <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Link img..."
                       required name="img">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category*</label>
                <select class="form-select" required name="category_id">
                    @foreach($categories as $id => $item)
                        <option value="{{$id}}">{{$item['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" type="button">Submit</button>
            </div>
        </form>
    </div>
@endsection
