<?php

class CommentsController extends BaseController {
	public function save() {
		$comment = Comment::create(['content'=>Input::get('content'), 'user'=>'DuanPengfei', 'article_id'=>Input::get('articleId')]);

		return Redirect::route('article.show', ['id'=>Input::get('articleId')]);
	}
}
