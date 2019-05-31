<?php
error_reporting(0);
include("connect.php");
if(isset($_POST['login']));
$username=$_POST['username'];
$comment=$_POST['comment'];

$date=date("Y m d,h:i:sa");
$qry=mysql_query("insert into strict(name,comments,date) values('$username','$comment','$date')");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="anon.ico" rel="icon" type="image/png" />
        <title>ADAC | About</title>
        <meta name="viewport" content="" width="device-width">
        <link rel="stylesheet" type="text/css" href="stylesAbout.css">
    </head>
    <body onload="loaderFunction()">
        <div id="loader"></div>
        <div class="body"></div>
        <div id="top-head" class="animate-left">
                <a href="index.html"><img src="img1.jpg" alt="person" width="50" height="75" name="image" ></a>
                <h5 id="full_name">ADESANYA DANIEL .C.</h5>
        </div>
        <section class="section-services" >
                <div id="container_section"  class="animate-bottom" style="overflow-x: auto">
                    <table>
                        <tr colspan="3"><h3 id="table-head"><div class="tbh"></div>MY INTERESTS</h3></tr>
                        <tr>
                            <td class="data"><h4 id="header">WEB AND SOFTWARE DEV</h4>
                                <p name="about">Being in this for close to a year. Currently concentrating on learning web development but still have interest in learning languages like JAVA and PYTHON. I already have preliminary knowledge about JAVA.</p>
                            </td>
                            <td class="data"><h4 id="header">GAMING</h4>
                                <p>Being in this since I was born. I'm so into video games and some indoor games.Not a sports person. Really hoping to become a game developer too.</p>
                            </td>
                            <td class="data"><h4 id="header">MUSIC</h4>
                                <p>I play a few instruments because music is life. I Really love music because it keeps me going.</p>
                            </td>
                        </tr>
                    </table>
                </div>
        </section>
        <section class="section-progress"  >
                <div id="container_section2"  class="animate-bottom2" >
                    <table>
                        <tr colspan="3"><h3 id="table-head"><div class="tbh"></div>MY PROGRESS AS A DEVELOPER</h3></tr>
                        <tr>
                            <td class="data1"><h4 id="header">xHTML</h4>
                                <div id="defaultBar">
                                    <div id="progressBar1"></div>
                                </div>
                                <p name="about">70%</p>
                            </td>
                            <td class="data1"><h4 id="header">CSS</h4>
                                <div id="defaultBar">
                                    <div id="progressBar2"></div>
                                </div>
                                <p>45%</p>
                            </td>
                            <td class="data1"><h4 id="header">JavaScript</h4>
                                <div id="defaultBar">
                                    <div id="progressBar3"></div>
                                </div>
                                <p>Just Basics.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="data1"><h4 id="header">Java</h4>
                                <div id="defaultBar">
                                    <div id="progressBar4"></div>
                                </div>
                                <p>10%</p>
                            </td>
                            <td class="data1"><h4 id="header">Php</h4>
                                <div id="defaultBar">
                                    <div id="progressBar5"></div>
                                </div>
                                <p>Just have little intro to it.</p>
                            </td>    
                            <td class="data"><h4 id="header">MySql</h4>
                                <div id="defaultBar">
                                    <div id="progressBar6"></div>
                                </div>
                                <p>Just little knowledge about it.</p>
                            </td>
                        </tr>
                    </table>
                </div>
        </section>
        <div class="last">
        <h3 id="h3">Have any comments to make?</h3>
        <div class="container">
            <form method="POST">
                <label for="username">Name:</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required/>
                <label for="comment">Comment:</label> 
                <input type="text" id="comment" name="comment" placeholder="Enter Your Comment" required>
                <div id="lower">
                    <input type="checkbox" required>
                    <label for="checkbox">Agree to terms and conditions</label>
                    <input type="submit" name="login" value="Submit" onclick="funky()">
                </div>
            </form>
            <?php
            if($qry){
                    echo '<script type="text/javascript"> alert("Thanks, Comment submitted!")</script>';
                }else{
                    echo'<script type="text/javascript"> alert("Sorry, Error in submission!")</script>';
                }
            ?>
        </div>
        
            <div class="frame">
            <iframe width="50%" height="300px" src="comments.php" style="border: none;" ></iframe>
            </div>
        
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="init.js"></script>
        <footer id="bottom">
            <h3 align="center"> &copy;Hit me up on <a href="https:www.facebook.com/adesanyadaniel.adac">facebook</a> or send me a <a href="mailto:danieladesanya25@gmail.com">mail</a></h3>
        </footer>
    </body>
</html>