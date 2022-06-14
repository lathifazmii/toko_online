
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->
    <style type="text/css">
      body {
        padding-top: 5rem;
      }
      .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
      }
    </style>
  </head>

  <body>

    <!-- Tempat Navbar Menu di pidahkan ke file navbar.php -->
    <?= $this->include('navbar') ?>

    <main role="main" class="container">

      <!-- menambahkan render section menangkap view yang di render oleh controller -->
      <?= $this->renderSection('content') ?>
      <!-- <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div> -->

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('jquery-3.5.1.js') ?>"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->
  </body>
</html>
