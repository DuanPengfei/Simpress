@extends("layout")
@section("content")
{{-- artilce --}}
  @foreach ($articles as $article)
    <div class="article">
      <div class="title"> {{ link_to_route('article.show', $article->title, ['id'=>$article->id]) }} </div>
      <div class="created_at_updated_at"> 创建: {{ $article->created_at }} 更新: {{ $article->updated_at }} </div>
      <div class="content"> {{ Str::limit($article->content, 100, '...'); }} <br /> {{ link_to_route('article.show', '阅读全文', ['id'=>$article->id]) }} </div>
    </div>
    <hr />
  @endforeach
@stop