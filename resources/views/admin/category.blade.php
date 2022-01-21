@extends('layouts.main')

@section('title')
    Admin Create Category
@endsection

@section('content')
    <div class="row pt-3 pb-3">
        <form action="{{route('admin::category::create')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name..." required name="title">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" type="button">Submit</button>
            </div>
        </form>
    </div>
@endsection
