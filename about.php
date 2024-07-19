<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            overflow-x: hidden;
        }

        /* Header Styles */
        header {
            background: #4CAF50;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
            font-weight: bold;
            transition: color 0.3s;
        }

        header nav ul li a:hover {
            color: #f0f0f0;
        }

        .hero {
            background: url('hh.jpeg') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            padding: 0 20px;
            margin-top: 70px; /* Height of header */
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
        }

        .stat {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: #333;
        }

        .stat h3 {
            font-size: 2.5rem;
            margin-bottom: 5px;
            color: #4CAF50;
        }

        .stat p {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 30px;
            background: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            font-weight: 600;
        }

        .btn:hover {
            background: #45a049;
        }

        /* Section Styles */
        section {
            padding: 4rem 0;
            background: #fff;
        }

        section:nth-of-type(odd) {
            background: #e9ecef;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        /* Projects Section */
        .projects .project {
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background: #fff;
            padding: 20px;
        }

        .projects .project h3 {
            font-size: 2rem;
            margin-bottom: 10px;
            font-weight: 600;
            color: #333;
        }

        .projects .project img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        /* Footer Styles */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 20px;
            position: relative;
        }

        footer p {
            margin: 0;
        }
.container1 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    background: url('hh.jpeg') no-repeat center center/cover;
}


        /* Responsive Styles */
        @media (max-width: 768px) {
            header .container {
                flex-direction: column;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 10px;
            }

            .projects .project {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>About Us</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#mission">Our Mission</a></li>
                    <li><a href="#vision">Our Vision</a></li>
                    <li><a href="#projects">Our Projects</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container1">
                <h2>Empowering Communities through Sustainable Development</h2>
                <p>"Our goal is to create self-sufficient villages, promoting sustainable practices for a better future."</p>
                <div class="hero-stats">
                    <div class="stat">
                        <h3>50+</h3>
                        <p>Villages Connected</p>
                    </div>
                    <div class="stat">
                        <h3>200+</h3>
                        <p>Farmers Empowered</p>
                    </div>
                    <div class="stat">
                        <h3>1M+</h3>
                        <p>Liters of Milk Produced</p>
                    </div>
                    <div class="stat">
                        <h3>500K+</h3>
                        <p>Kg of Fertilizer Distributed</p>
                    </div>
                </div>
                <a href="#details" class="btn">Learn More</a>
            </div>
        </section>

        <section class="details" id="details">
            <div class="container">
                <h2>About Our Initiative</h2>
                <p>We aim to connect villages and establish factories that produce fertilizer and milk, empowering local communities and promoting sustainable development.</p>
            </div>
        </section>

        <section class="mission" id="mission">
            <div class="container">
                <h2>Our Mission</h2>
                <p>Our mission is to create sustainable solutions for communities through local factories that produce high-quality fertilizer and milk, supporting local economies and enhancing agricultural productivity.</p>
            </div>
        </section>

        <section class="vision" id="vision">
            <div class="container">
                <h2>Our Vision</h2>
                <p>Our vision is to create a network of self-sufficient villages that thrive through sustainable agricultural practices and local production facilities.</p>
            </div>
        </section>

        <section class="projects" id="projects">
            <div class="container">
                <h2>Our Projects</h2>
                <div class="project">
                    <h3>Fertilizer Production</h3>
                    <p>Our fertilizer production initiative focuses on creating high-quality, locally-produced fertilizers that support sustainable agriculture. By leveraging organic and environmentally friendly practices, we help farmers improve soil health and crop yields, ensuring long-term agricultural productivity and food security.</p>
                    <img src="fertilizer.jpeg" alt="Fertilizer Production">
                </div>
                <div class="project">
                    <h3>Milk Production</h3>
                    <p>Our milk production initiative supports local dairy farmers by providing resources, training, and infrastructure to enhance milk quality and production. By promoting sustainable dairy farming practices, we ensure a consistent supply of fresh milk to communities while empowering farmers economically.</p>
                    <img src="milk.jpeg" alt="Milk Production">
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
