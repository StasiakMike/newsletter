<?php
session_start();

if (isset($_SESSION['logged_id'])) {
    header('Location: list.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Newsletter - admin panel</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">

        <header>
            <h1>Admin panel</h1>
        </header>

        <main>
            <article>
                <form method="post" action="list.php">
                    <input type="text" name="login" placeholder="Login">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" value="Login!">

                    <?php 
                        if(isset($_SESSION['bad_attempt'])) {
                            echo '<span style="color: red"><b>Invalid login or password!</b></span>';
                            unset($_SESSION['bad_attempt']);
                        }
                    ?>
                </form>
            </article>
        </main>

    </div>
    <footer>
        <span>2019 &copy; Mike Stasiak & MvdB Software Solutions</span>
    </footer>
</body>
</html>