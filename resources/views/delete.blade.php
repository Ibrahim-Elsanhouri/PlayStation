@extends('layouts.app')
@section('content')
<div class="page-header">
<h1>Delete - game title <small>Are You Sure ? </small> </h1>
</div>
<form action="" method="post" role="form">
<input type="hidden" name="game" value="put the id here " />
<input type="submit" class="btn btn-danger" value="Yes"/>
<a href="" class="btn btn-default">No </a></form>
@endsection