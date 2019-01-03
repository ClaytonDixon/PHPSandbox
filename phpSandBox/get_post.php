<?php
    
    if(isset($_GET['name'])){
        //print_r($_GET);
        $name = htmlentities($_GET['name']);
        //echo $name;
    };
    /*   
    //POST is more secure
    if(isset($_POST['name'])){
        print_r($_POST);
        $name = htmlentities($_POST['name']);
        echo $name;
    };
*/
/*
    if(isset($_REQUEST['name'])){
        print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    };

    echo $_SERVER['QUERY_STRING'];
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
        <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    </head>
    <body>
        <form method="GET" action="get_post.php">
            <div>
                <label>Name</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text" name="email">
            </div>
                <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?> </h1>
</body>
</html>