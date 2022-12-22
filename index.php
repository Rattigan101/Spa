<?php 
    $title = 'Index';
    require_once 'includes/header.php';
   // require_once 'db/conn.php'; 
?>
<link rel = "stylesheet" href = "css/site.css" />
<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="uploads/image_1.jpg" class="d-block w-100" alt="..." style="height:400px;">
            </div>
            <div class="carousel-item">
                <img src="uploads/pedicure.png" class="d-block w-100" alt="..." style="height:400px;">
            </div>
            <div class="carousel-item">
                <img src="uploads/image 3.jpg" class="d-block w-100" alt="..." style="height:400px;">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
         <br>
         <div style="background-color:fuchsia; display: flex;">
        <div style="background-color; min-height: 300px;flex: 1; margin: 12px;"><div id="content">
            <div class="padding">
                <h2>Welcome</h2> 
                <p>
                Located in the heart of Kingston, New Image Day Spa is a serene retreat that is designed to be your 
                relaxation destination.
            </p>
            <p>
                We at New Image Day Spa are committed to giving you personalized service in a clean, relaxing sanctuary
                whether you spend one hour or the entire day... Our Bella Garden is one of a kind – relax before or 
                after a Spa treatment or chose to have your Spa Treatment in our lush Bella Garden with its 
                exotic outdoor shower.
            </p>
            <p>
                We offer services to care for your hair, nails and skin.  Our spa experts provide genuine and truly 
                personal services. Our treatments are inspired by the beauty and simplicity of life, and are the ultimate 
                in luxury, inspired by you and personalized to your needs.
	        </p>
            </div>
    </div>
    </div>
    <div style="background-color; min-height: 300px; flex: 1; margin: 12px;"><div id="sidebar-a">
        <div class="padding">
        <br>
            <p><img class="imgLeftFloat" src="uploads/facial.png" alt="New Image Day Spa Signature Facial" width="98" height="73"></p><h3>New Image Signature Facial</h3>A “Purifying” treatment to address your skin’s specific needs.<p></p>
        </div>
        <div class="padding">	
                <p><img class="imgLeftFloat" src="uploads/pedicure.png" alt="New Image Day Spa Signature Pedicure" width="98" height="73"></p><h3>New Image Signature Pedicure</h3>Treat yourself to the ultimate in pampering. Beginning with an aromatic footbath.<p></p>
        </div>
    </div>
</div>
</div>
<link href="css/master.css" rel="stylesheet" type="text/css" />
    
   


        <br>


</body> 
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>