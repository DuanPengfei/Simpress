<?php
use Illuminate\Support\MessageBag;

class AdminController extends Controller {
  public function index() {
    if (Session::has('username')) {
      $articles = Article::all();

      return View::make('admin.articles.index', compact('articles'));
    } else {
      $data["errors"] = new MessageBag([
        "notice" => [
          "Please login first"
        ]
      ]);
      return Redirect::route('user.login')->withInput($data);
    }
  }
}