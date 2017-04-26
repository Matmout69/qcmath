<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $pageName; ?> - Questions de maths</title>


    <?php
      // Le contrôleur appelant peut peut définir $reqStylesheets comme un tableau
      // contenant toutes les feuilles de style à inclure
      if (isset($reqStylesheets)) {
          foreach ($reqStylesheets as $ss) {
              echo '<link href="'.$ss.'" rel="stylesheet">';
          }
      }
    ?>

      <!-- Bootstrap core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <!-- MathJax -->
      <script type="text/x-mathjax-config">
        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
      </script>
      <script type="text/javascript" async
      src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_CHTML">
      </script>

  </head>
