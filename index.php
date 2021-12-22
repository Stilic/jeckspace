<!DOCTYPE html>
<html>

<head>
    <title>JeckSpace.cum - a place for triends</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/style.css">
</head>

<body>
    <div class="bbb">
        <header>
            <div class="top flex">
                <div>
                    <p><a href="/">JeckSpace.Cum</a> &nbsp;|&nbsp; <a href="/">Home</a></p>
                </div>
                <div class="right flex">
                    <p>Search JeckSpace:&nbsp;</p>
                    <input type="text">
                    &nbsp;&nbsp;&nbsp;
                    <button>Go</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p><strong><a href="#">Help</a></strong> | <strong><a href="/signup">Sign Up</a></strong>
                    </p>
                </div>
            </div>
            <div class="logo-container">
                <img class="box" src="/img/logo.png" alt="">
            </div>
        </header>
        <nav>
            <a href="/">Home</a>
            | <a href="#">Browse</a>
            | <a href="#">Search</a>
            | <a href="#">Invite</a>
            | <a href="#">Rank</a>
            | <a href="#">Mail</a>
            | <a href="#">Blog</a>
            | <a href="#">Favorites</a>
            | <a href="#">Forum</a>
            | <a href="#">Groups</a>
            | <a href="#">Games</a>
            | <a href="#">Music</a>
            | <a href="#">Classifieds</a>
            | <a href="#">SignUp</a>
        </nav>
        <main>
            <?php
            // https://web.archive.org/web/20040610090214/http://www.myspace.com/index.cfm?fuseaction=splash
            require 'vendor/autoload.php';
            // require 'db.php';

            $router = new AltoRouter();
            // $db = new db();

            function page($page)
            {
                require __DIR__ . '/views/' . $page . '.php';
            }

            $router->map('GET', '/', function () {
                page('home');
            });

            $router->map('GET', '/login', function () {
                page('login');
            });
            $router->map('GET', '/signup', function () {
                page('signup');
            });

            $router->map('GET', '/popup', function () {
                page('popup');
            });
            $router->map('GET', '/misc/about', function () {
                page('about');
            });

            $match = $router->match();
            if (is_array($match) && is_callable($match['target'])) {
                call_user_func_array($match['target'], $match['params']);
            } else {
                header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
                echo '<p><strong>404 Not Found</strong></p>';
            }
            ?>
        </main>
    </div>
    <div class="bg">
        <div class="bbb">
            <footer>
                <div class="flex fce">
                    <img src="/img/truste.gif" alt="TRUSTe">
                    &nbsp;
                    <p>JeckSpace is <strong>NOT</strong> a licensee of the TRUSTe Privacy Program</p>
                </div>
                <nav class="trans">
                    <a href="/misc/about">About</a>
                    | <a href="#">News</a>
                    | <a href="#">FAQ</a>
                    | <a href="#">Terms</a>
                    | <a href="#">Privacy</a>
                    | <a href="#">Contact</a>
                    | <a href="#">Promote</a>
                    | <a href="#">Advertise</a>
                    | <a href="#">JeckSpace Shop</a>
                </nav>
                <p class="lt">©<?php echo date("Y"); ?> JeckSpace.Cum. All Rights Reserved.</p>
            </footer>
        </div>
    </div>
    <script>
        console.log("%cOMG YOU GOT THE THING!", "color:red;font-size:30px;");
        console.log(
            "Don't copy-paste random text here. There is 1/10 chance you got your account hacked and to lost your triends!"
        );
    </script>
</body>

</html>