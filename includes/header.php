<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rutgers.com</title>
  <link media="all" rel="stylesheet" href="<?php echo $site_url; ?>/css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,100italic,100,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
  <script type="text/javascript">window.jQuery || document.write('<script src="<?php echo $site_url; ?>/js/jquery-1.11.2.min.js"><\/script>')</script>
  <script type="text/javascript" src="<?php echo $site_url; ?>/js/jquery.main.js" defer></script>
</head>
<body>
  <div id="wrapper">
    <header id="header">
      <div class="container">
        <div class="nav-opener-bar">
          <a href="#" class="nav-opener"><span>Opener</span></a>
        </div>
        <div class="drop">
          <div class="logo">
            <a href="index.php"><img src="<?php echo $site_url; ?>/images/logo-rutgers.jpg" width="90" height="85" alt="RUTGERS FUTURE BY DEVCO.ORG"></a>
          </div>
          <nav id="nav">
            <ul>
              <li <?php if ($thisPage=="The Initiative") echo "class=\"active\""; ?>>
                <a href="index.php" class="icon-pencil"></a>
                <strong class="text">The Initiative</strong>
              </li>
              <li <?php if ($thisPage=="What is LEED?") echo "class=\"active\""; ?>>
                <a href="what-is-leed.php" class="icon-home"></a>
                <strong class="text"> What is LEED?</strong>
              </li>
              <li <?php if ($thisPage=="Why is LEED?") echo "class=\"active\""; ?>>
                <a href="why-is-leed.php" class="icon-home-help"></a>
                <strong class="text">Why LEED?</strong>
              </li>
              <li <?php if ($thisPage=="Apartments") echo "class=\"active\""; ?>>
                <a href="apartments.php" class="icon-empire"></a>
                <strong class="text">Apartments</strong>
              </li>
              <li <?php if ($thisPage=="R Building") echo "class=\"active\""; ?>>
                <a href="r-building.php" class="icon-building"></a>
                <strong class="text">R Building</strong>
              </li>
              <li <?php if ($thisPage=="Honors College") echo "class=\"active\""; ?>>
                <a href="honors-college.php" class="icon-building-small"></a>
                <strong class="text">Honors College</strong>
              </li>
              <li <?php if ($thisPage=="Media Gallery") echo "class=\"active\""; ?>>
                <a href="media-gallery.php" class="icon-apple"></a>
                <strong class="text">Learn More</strong>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
