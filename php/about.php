<?php
session_start();
if($_SESSION['username'] == "" )
{
    header("location:login.php");
}
$username=$_SESSION['username'];
$password=$_SESSION['password'];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
</head>

<body>
    <div id="resume-form">
        <div class="heading-right">
            <img src="../images/Cat03.jpg" alt="Pusa ni Yorme width=" 220" height="220" class="img">
        </div>

        <div class="heading-left">
            <h3>Willy Ledason</h3>
            <i>
                <h3>wil28.lee@gmail.com</h3>
            </i>
            <h3>09195621535</h3>
        </div>

        <div class="info">
            <h4>Objective:</h4>
            <p>I am willing to give my total support to the organization that I am in,<br>
                with the experience and capability that I have, in order to achieve <br>
                the organization's goals and create mutual benefits.
            </p>

            <h4>Schools</h4>
            <ul>
                <li class="li1">EPZA Elementary School
                    <ul>
                        <li class="li2">2000</li>
                        <li class="li2">2004</li>
                    </ul>
                </li>

                <li class="li1">Mining Elementary School
                    <ul>
                        <li class="li2">2004</li>
                        <li class="li2">2006</li>
                    </ul>
                </li>

                <li class="li1">Francisco G. Nepomuceno Memorial High School
                    <ul>
                        <li class="li2">2006</li>
                        <li class="li2">2007</li>
                    </ul>
                </li>

                <li class="li1">St. Augustine's Academy of Patnongon Incorporated
                    <ul>
                        <li class="li2">2007</li>
                        <li class="li2">2010</li>
                    </ul>
                </li>

                <li class="li1">Republic Central Colleges
                    <ul>
                        <li class="li2">2018</li>
                        <li class="li2">2020</li>
                    </ul>
                </li>
            </ul>


            <h4>Skills</h4>
            <ol>
                <li class="li1">Typing</li>
                <li class="li1">Painting</li>
                <li class="li1">Drawing</li>
            </ol>

            <h4>Contact/s</h4>
            <p>09061234567</p>

            <h4>Others</h4>
            <form action="logout.php" method="post">
                <button type="button" class="myButton" onclick="Github()">Github</button>
                <input type="button" class="myButton" value="Activity" onclick="activity()" />

                <input type="submit" value="Logout" class="myButton" />
            </form>

        </div>
    </div>
</body>

</html>

<script type="text/javascript" src="../jscript/script.js"></script>