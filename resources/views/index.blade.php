@extends('layouts.app')
@section('content')
@if(session()->has('msg'))
<div class="alert alert-success">
{{session()->get('msg')}}
</div>
@endif
<div class="page-header">
<h1>All Games</h1>
</div>
<div class="panel panel-default">
<div class="panel-body">
<a href="{{ route('game.create') }}" class="btn btn-primary">Create Game</a>
</div>
</div>
@if($games->isEmpty())
<p>there are no games</p>
@else 
<table class="table table-striped">
<tr>
<th>Title </th><th>Publisher</th>
<th>Complete</th>
<th>Created by</th>
<th>Actions</th></tr><tr>
@foreach($games as $game)
<td>{{$game->title}}</td>
<td>{{$game->publisher}}</td>
@if ($game->completed == 0)
<td>Not Completed</td>
@else 
<td> Completed</td>
@endif
<td>{{$game->user->name}}</td>
<td>
<button class="btn btn-default"><a href="{{route('game.edit' , $game->id ) }}">Edit</a> </button>
<button href="" class="btn btn-danger"><a href="{{route('game.delete' , $game->id ) }}">Delete</a></button>

</td>
</tr>
@endforeach
</table>
@endif
@endsection