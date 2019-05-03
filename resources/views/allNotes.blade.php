@extends('layouts.app')

<style type="text/css">
    .btn-primary{
        margin-bottom: 5px
    }
</style>
@section('content')
<div class="container">
    <h1>All Notes</h1>
    <table class="table table-light table-bordered  table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)

            <tr>
                <td>{{$note->id}}</td>
                <td>{{$note->title}}</td>
                <td>{{$note->content}}</td>
                <td>
                    <form method="post" action="{{url('note/delete/' . $note->id)}}" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
           
        </tbody>
    </table>
</div>
@endsection
