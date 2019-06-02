<!DOCTYPE html>
<html lang="sv" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'EZTV')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  </head>

  <body>
    <nav class="navbar" role="navigation">
      <div class="navbar-brand">
        <div class="navbar-burger burger">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </div>
      </div>
      <div class="navbar-menu">
        <div class="navbar-start">
          <a href="/" class="navbar-item logo"><img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="" style="width: 150px;"></a>
          <a href="/" class="navbar-item">
            News
          </a>
          <a href="/teams" class="navbar-item">
            Teams
          </a>
          <a href="/matches" class="navbar-item">
            Matches
          </a>
          <a href="/forums" class="navbar-item">
            Forums
          </a>
          <?php if (isset($_SESSION['loggedin'])) { ?>
          <a href="/profile" class="navbar-item">
            My Profile
          </a>
          <?php } ?>
        </div>
        <div class="navbar-end">
          <?php if (!isset($_SESSION['loggedin'])) { ?>
          <a href="/register" class="navbar-item" style="border-left: 1px solid rgba(204, 204, 204, .65);">
            Register <i class="fas fa-user-plus log-icon"></i>
          </a>
          <a href="/login" class="navbar-item">
            Sign in <i class="fas fa-user log-icon"></i>
          </a>
          <?php } else { ?>
          <a href="/logout" class="navbar-item" style="border-left: 1px solid rgba(204, 204, 204, .65);">
            Log out <i class="fas fa-sign-out-alt log-icon"></i>
          </a>
          <?php } ?>
        </div>
      </div>
    </nav>

    <div class="container wrapper">
      @yield('content')
    </div>

    <div class="footer">
      <div class="content has-text-centered">
        <p>
          Copyright © <script>
            document.write(new Date().getFullYear());
            </script> <strong>EZTV</strong>
          </p>
        </div>
    </body>
  </html>
