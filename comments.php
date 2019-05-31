<?php
    error_reporting(0);
    include("connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="stylesAbout.css">
        <title>Comments</title>
    </head>

    <body>
        <div class="comment_section">
            <?php
                $sql=mysql_query("SELECT * from strict ORDER by id desc");
                if(mysql_num_rows($sql)>0){
                    while ($row = mysql_fetch_assoc($sql)) {
                        echo "<b>".$row['name']."</b>"." says:    "."<p>".$row['comments']."</p>";
                        echo "<i>".$row['date']."</i><br /><br /><br/>";
                    }
                }else{
                    echo "No comment found";
                    }
            ?>
        </div>
    </body>
</html>
