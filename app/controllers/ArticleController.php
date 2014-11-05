<?php
class ArticleController extends BaseController {
	public function index() {
		$articles = Article::all();

		return View::make('articles.index',compact('articles'));
	}

	public function create() {
		return View::make('articles.create');
	}

	public function save() {
		$article = Article::create(['title'=>Input::get('title'), 'content'=>Input::get('content'), 'user_id'=>1]);

		return Redirect::route('article.show', ['id'=>$article->id]);
	}

	public function show($id = 1) {
		$article = Article::find($id);
		$comments = Comment::whereRaw('article_id = ?', [$id])->get();

		return View::make('articles.show', compact('article', 'comments'));
	}

	public function edit($id) {
		$article = Article::find($id);

		return View::make('articles.edit', compact('article'));
	}

	public function update($id) {
		$article = Article::find($id);

		$article->title = Input::get('title');
		$article->content = Input::get('content');
		$article->save();

		return Redirect::route('article.show', array($article->id));
	}

	public function delete($id) {
      return View::make('articles.delete', ['id'=>$id]);
	}

	public function destroy($id) {
		Article::destroy($id);

		return Redirect::route('admin.index');
	}
}
