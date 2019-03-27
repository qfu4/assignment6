<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giodme Personal Website | Newsletter</title>
    <?php include 'include/html-links.inc'; ?>
</head>

<body>



    <?php include 'include/top-bar.inc'; ?>

    <main class="container white-background push-to-bottom">

        <h2>SUBSCRIBE TO MY NEWSLETTER</h2>

        <div class="form-wrapper">
            <form method="POST" action="#" class="form-grid">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required placeholder="John">

                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required placeholder="Doe">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="email@example.com">

                <input type="submit" value="Submit" class="submit-button">

            </form>


            <aside class="newsletter-info">

                <img src="images/lemon-animation.gif" alt="An animation of Giodme's Lemon Logo">

            </aside>

        </div>

    </main>

    <?php include 'include/scripts.inc'; ?>
</body>

</html>