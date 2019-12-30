<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Newsletter </title>
    <meta name="description" content="">
    <meta name="keywords" content="L">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">

        <header>
            <h1>Join  our newsletter</h1>
        </header>

        <main>
            <article>
                <form method="post" action="save.php">
                    
                    <input type="email" name="email" placeholder="Your email here" <?php  if(isset($_SESSION['given_email'])) echo 'value="' . $_SESSION['given_email'] . '"' ?>>
                    
                    <input type="submit" value="Join!">
                    <br><br>

                    <?php  
                    if(isset($_SESSION['given_email'])) {
                        echo '<span style="color: red"><b>This is not correct email address!</b></span>';
                        unset($_SESSION['given_email']);
                    } 
                    ?>

                </form>
                <h5>About the project:</h5>
                <ul>
                    <li>This is a newsletter subscribtion system from scratch in PHP</li>
                    <li>Allows for subsciption and storing the data in DB</li>
                    <li>Admin panel allows rewiev the base of subscribers</li>
                    <li>To login the admin panel use ADAM and QWERTY123</li>
                </ul>
            </article>
        </main>
        

    </div>
    <footer>
        <span>2019 &copy; Mike Stasiak & MvdB Software Solutions</span>
    </footer>
</body>
</html>