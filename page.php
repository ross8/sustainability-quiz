<! Doctype html >
<html>
<head>
    <?php
    $page = $_GET["page"];
    require( 'head.php' );
    ?>
</head>
<body>
    
    <div class="container">
	<?php
	    include( 'pages/' . $page . '.php');
	?>
    </div>
    
    <?php include('scripts.php') ?>
    
</body>
</html>