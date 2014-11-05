<?php
use Illuminate\Support\MessageBag;

class UserController extends Controller {
  public function login() {
    $errors = new MessageBag();

    if ($old = Input::old("errors")) {
      $errors = $old;
    }

    $data = [
      "errors" => $errors
    ];


    if (Input::server("REQUEST_METHOD") == "POST") {
      $validator = Validator::make(Input::all(), [
        "username" => "required",
        "password" => "required"
      ]);

      if ($validator->passes()) {
        $credentials = [
          "username" => Input::get("username"),
          "password" => Input::get("password")
        ];
        if (Auth::attempt($credentials)) {
          Session::put('username', Input::get('username'));
          return Redirect::route("article.index");
        } else {
          $data["errors"] = new MessageBag([
            "notice" => [
            "Username and/or password is wrong."
            ]
          ]);

          return Redirect::route("user.login")->withInput($data);
        }
      } else {
        $data["errors"] = new MessageBag([
          "notice" => [
            "Username and/or password invalid."
          ]
        ]);

        $data["username"] = Input::get("username");
        return Redirect::route("user.login")->withInput($data);
      }
    }

    return View::make("users.login", $data);
  }

  public function profile() {
    return View::make("users.profile");
  }
}