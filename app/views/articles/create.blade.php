@extends("layout")
@section("content")
  <div class="article">
    {{ Form::open(['method'=>'PUT','route'=>'article.save']) }}
        <h1>文章标题：</h1>
        {{ Form::text('title') }}

	      <h1>文章内容：</h1>
        {{ Form::textarea('content') }} <br />

	    {{ Form::submit('发表文章') }} </br>
    {{ Form::close() }}
  </div>
@stop