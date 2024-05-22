<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
        $welcomeMessage = "Welcome to Our Dynamic Website";
        $mainContent = "This is where the main content of your home page would go. You can include text, images, videos, or any other type of content that you want to display on your home page.";
    ?>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">My</span> Home Page</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1><?php echo $welcomeMessage; ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        </div>
    </section>

    <section id="main" class="container">
        <h2>Main Content</h2>
        <p><?php echo $mainContent; ?></p>
    </section>

    <footer>
        <p>Home Page &copy; 2024</p>
    </footer>
</body>
</html>
