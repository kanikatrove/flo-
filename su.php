<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainable Development</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background: #4CAF50;
    color: #fff;
    padding: 1rem 0;
    text-align: center;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header nav ul {
    list-style: none;
}

header nav ul li {
    display: inline;
    margin: 0 10px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

.hero {
    background: url('hero.jpg') no-repeat center center/cover;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
}

.hero .container {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 20px;
}

.hero h2 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background: #4CAF50;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.features {
    padding: 2rem 0;
    background: #fff;
}

.features .container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.feature {
    flex: 1;
    background: #e4e4e4;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
}

footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    margin-top: 20px;
}
</style>
    <header>
        <div class="container">
            <h1>Sustainable Development Initiative</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Connecting Villages for a Better Future</h2>
                <p>Join us in creating sustainable solutions for communities through local factories.</p>
                <a href="about.php" class="btn">Learn More</a>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="feature">
                    <a href="fertilizer.php"> <h3>Fertilizer Production</h3></a>
                    <p>Empowering farmers with locally produced, high-quality fertilizers.</p>
                </div>
                <div class="feature">
                   <a href="milk.php"> <h3>Milk Production</h3></a>
                    <p>Supporting dairy farming and ensuring fresh milk for all communities.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Sustainable Development Initiative. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
