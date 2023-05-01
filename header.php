<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cybersecurity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Group 20</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <?php if (strpos($_SERVER['REQUEST_URI'], "index") !== false) : ?>
        <li class="active"><a href="index.php">HOME</a></li>
      <?php else : ?>
        <li><a href="index.php">Home</a></li>
      <?php endif; ?>
      <?php if (strpos($_SERVER['REQUEST_URI'], "questionnaire") !== false) : ?>
        <li class="active"><a href="questionnaire.php">QUESTIONNAIRE</a></li>
      <?php else : ?>
      <li><a href="questionnaire.php">Questionnaire</a></li>
      <?php endif; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>