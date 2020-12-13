<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.min.css') }}">

  <title>@yield('title')</title>
</head>

<body>

  <!-- compornent start -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#" style="font-size:30px">homeManager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse float-left" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              タスク
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/task-list') }}">一覧</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/task-insert') }}">登録</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/task-update') }}">更新</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')
  </div>
  
  <!-- compornent end -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('/js/jquery3.4.1.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
</body>

</html>