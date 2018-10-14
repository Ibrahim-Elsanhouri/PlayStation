@extends('layouts.app')
@section('content')
<div class="page-header">
<h1>Edit Game </h1></div>
<form action="" method="post" role="form">
{{csrf_field()}}
<div class="form-group">
<label for="title">Title</label>
<input type="text" class="form-control" name="title" value="{{$game->title}}"/></div>
<div class="form-group">
<label for="publisher">Publisher</label>
<input type="text" class="form-control" name="publisher" value="{{$game->publisher}}"/></div>
<div class="checkbox">
 <label for="complete">
  <input type="checkbox" name="completed" value="1" /> Completed </label><br>
  <input type="checkbox" name="completed" value="0" /> not Completed </label>

</div>

<input type="submit" value="Edit a Game" class="btn btn-primary"/>
<a href="" class="btn btn-link">Cancel</a></form>
@endsection