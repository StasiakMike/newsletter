<?php

session_start();



if(isset($_POST['email'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(empty($email)) {
        $_SESSION['given_email'] = $_POST['email'];
        header('Location: index.php');
    } else {
        require_once 'database.php';

        $query = $db->prepare('INSERT INTO users VALUES (NULL, :email)');
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
    }


} else {
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Newsletter</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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
            <h1>Newsletter</h1>
        </header>

        <main>
            <article>
                <p style="color: green; font-weight: bold;">Thank you for the subscription!</p>
            </article>
        </main>

    </div>
    <footer>
        <span>2019 &copy; Mike Stasiak & MvdB Software Solutions</span>
    </footer>

</body>
</html>