<!<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
  <style>
    header {
      background: #e3e3e3;
      padding: 2em; 
      text-align: center; 
    } 
  </style>
</head>
<body>
  <ul>
    <?php 
      foreach ($names as $name) {
        echo "<li>$name</li>";
      }
    ?>
  </ul>  

<ul>
      <?php foreach ($person as $key => $val) : ?>
        <li><strong><?= $key; ?></strong> <?= $val; ?></li>
      <?php endforeach; ?>
</ul>    
</body>
</html>