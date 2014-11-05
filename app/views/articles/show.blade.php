@extends("layout")
@section("content")
{{-- 文章部分 --}}
  <div class="article">
    <div class="title">
	    {{ $article->title }}
    </div>

    <div class="content">
	    {{ $article->content }}
    </div>

    @if (Session::has('username') && Session::get('username') == $article->user)
      {{ Form::open(['method' => 'PUT', 'route' => ['article.edit', $article->id]]) }}
	      {{ Form::submit('修改文章') }}
      {{ Form::close() }}
    @endif
    <hr />
  </div>

  <div class="comment">
{{-- 显示评论部分 --}}
    评论内容：<br />
    @foreach($comments as $comment)
	    {{ $comment->content }}
	    <br /><br />
    @endforeach

{{-- 新建评论部分 --}}
    {{ Form::open(['method'=>'PUT','route'=>'comment.save']) }}
	    <div class="content">
        评论：<br />
        {{ Form::textarea('content') }}
        <input type="hidden" name="articleId" value="{{ $article->id }}">
      </div>

	    {{ Form::submit('发表评论') }} <br />
    {{ Form::close() }}
  </div>
@stop