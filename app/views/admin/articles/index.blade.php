@extends("layout")
@section("content")
  {{ Form::open(['method' => 'PUT', 'route' => 'article.create']) }}
    {{ Form::submit('新建文章') }}
  {{ Form::close() }}

  <table border=1>
	  <tr>
		  <th>文章标题</th>
      <th>创建时间</th>
      <th>最后更新时间</th>
		  <th>操作</th>
	  </tr>

	  @foreach ($articles as $article)
	  <tr>
		  <td>{{ link_to_route('article.show', $article->title, ['id'=>$article->id]) }}</td>
      <td>{{ $article->created_at }}</td>
      <td>{{ $article->updated_at }}</td>
		  <td>
        {{ Form::open(['method' => 'PUT', 'route' => ['article.edit', $article->id]]) }}
	        {{ Form::submit('修改') }}
        {{ Form::close() }}

        {{ Form::open(['method' => 'DELETE', 'route' => ['article.delete', $article->id]]) }}
	        {{ Form::submit('删除') }}
        {{ Form::close() }}
		  </td>
	  </tr>
	  @endforeach
  </table>
@stop