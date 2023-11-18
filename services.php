<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Section Using HTML And CSS</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<style>
 .row {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Adjust the number of columns as needed */
            gap: 20px; /* Adjust the gap between items */
        }

        .service {

        text-align: center; 
        padding: 25px 10px; 
        border-radius: 5px; 
        
        font-size: 14px;
        
        cursor: pointer;
        
        background:none;
        transition: transform 0.5s, background 0.5s;
    
        }
</style>
</head>

<body>
    <div class="container">
        <h1>Our Services</h1>
        <div class="row">
            <div class="service">
                <i class="fas fa-camera"></i>
                <h2>Portrait Photography</h2>
                <p>Offer professional portrait photography services for individuals, families, and groups. This can include headshots, family portraits, and senior portraits</p>
            </div>
<div class="service">
                <i class="fas fa-cubes"></i>
                <h2>Product Photography</h2>
                <p>Help businesses showcase their products with high-quality product photography</p>
            </div>
<div class="service">
                <i class="fas fa-camera-retro"></i>
                <h2>Event Photography</h2>
                <p>Cover a wide range of events, such as weddings, corporate events, parties, and conferences. Event photography captures important moments and memories.</p>
            </div>
<div class="service">
                <i class="fas fa-vest-patches"></i>
                <h2>Fashion Photography</h2>
                <p>Collaborate with fashion designers, models, and clothing brands to create striking fashion photography for magazines, websites, and advertising campaigns</p>
            </div>
<div class="service">
                <i class="fas fa-utensils"></i>
                <h2>Food Photography</h2>
                <p>Specialize in capturing appetizing food images for restaurants, food blogs, and menus. Good food photography can entice potential customers</p>
            </div>
<div class="service">
               <i class="fas fa-user-tie"></i>
                <h2>Lifestyle Photography</h2>
                <p>Capture candid and natural moments of people in their daily lives. Lifestyle photography is often used for blogs, social media, and magazines</p>
            </div>
<div class="service">
                <i class="fas fa-person-pregnant"></i>
                <h2>Baby and Maternity Photography</h2>
                <p>Help parents capture precious moments during pregnancy and the early stages of a child's life</p>
            </div>
<div class="service">
                <i class="fas fa-building"></i>
                <h2>Architectural Photography</h2>
                <p> Photograph buildings, interior designs, and real estate properties. Architectural photography is essential for real estate listings and interior design portfolios</p>
            </div>
        </div>
    </div>
</body>

</html>
