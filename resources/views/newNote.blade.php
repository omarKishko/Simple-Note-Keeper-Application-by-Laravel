@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 50px">
                <div class="card-header">Create new note</div>
                <div class="card-body">
                    <form class="" method="POST" action="{{ url('note/add') }}">
                        {{ csrf_field() }}   
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Title">
                        </div> 
                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="Note .."></textarea>
                        </div>
                        <input class="btn btn-success" type="submit" name="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
