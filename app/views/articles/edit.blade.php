@extends("layout")
@section("content")
  <div class="article">
    {{ Form::open(['method' => 'put', 'route'=>['article.update', $article->id]]) }} <br />
        <h1>文章标题：</h1>
		    {{ Form::text('title', $article->title) }}

	      <h1>文章内容：</h1>
		    {{ Form::textarea('content', $article->content) }} <br />

		  {{ Form::submit('修改文章') }} <br />
    {{ Form::close() }}
  </div>
@stop