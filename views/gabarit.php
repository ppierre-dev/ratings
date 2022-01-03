<!DOCTYPE HTML>
<html lang="fr">
<head>
    <?php
        if(isset($title)) echo "<title>".$title."</title>";
        if(file_exists('css/default.css')) echo "<link href='css/default.css' rel='stylesheet'>";
        if(isset($controller)) {
            if(file_exists('controllers/'.$controller.'.php')) echo "<link href='css/'.$controller.'.css' rel='stylesheet'>";
        }
    ?>
</head>
<body>
<?php
    if (isset($content)) echo $content;
?>
</body>
</html>