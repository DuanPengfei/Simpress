<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="/css/layout.css" />
    <title>
      DuanPengfei's Blog
    </title>
  </head>
  <body>
    @include("header")
    <div class="container">
      @yield("content")
    </div>
    @include("footer")
  </body>
</html>