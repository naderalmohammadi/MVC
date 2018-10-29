<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <!-- <link rel="stylesheet" href="css/bootstrap4.min.css" media="screen" title="no title" charset="utf-8"> -->
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css" media="screen" title="no title" charset="utf-8">
    <title><?=$this->siteTitle();?></title>
    <script src="<?=PROOT?>js/jquery.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->

    <!-- <?= $this->content('head'); ?> -->
  </head>
  <body>
    <?php include 'main_menu.php' ?>
    <div class="container-fluid" style="min-height:cal(100 - 125px);">
      <?= $this->content('body'); ?>
    </div>
  </body>
</html>
