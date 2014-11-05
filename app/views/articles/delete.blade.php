@extends("layout")
@section("content")
  确定删除 id={{ $id }} 这篇文章吗？
  {{ Form::open(['method' => 'DELETE', 'route' => ['article.destroy', $id]]) }}
	  {{ Form::submit('确定') }}
  {{ Form::close() }}
@stop