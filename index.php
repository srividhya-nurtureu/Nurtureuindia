<?php


//start session
session_start();

require_once('php/header.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NurtureU Technologies</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare/ajax/libs/font-awesome/5.8.2/css/all.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
 

</head>
<body>

<!-- Banner -->
<div class="banner">
    <div class="banner-content">
      <h1 class= "section-heading pb-2">Zoho Partner Provider</h1>
      <p class="pb-2">Providing Simple Solutions For Complex Business Problems.</p>
      <a href="contact.php" class="contact-buttons">Contact Us</a>
    </div>
  </div>
<!-- End of banner-->

<!--Products -->
<div class="product-container pb-5">
        <h1 class="section-heading pt-4 py-3">Products</h1>
        <div class="product-images">
            <div class="product-image">
                <img src="images/zohocrm.png" alt="Product 1">
                <h5>Zoho CRM</h5>
            </div>
            <div class="product-image">
                <img src="images/zohobook.png" alt="Product 2">
                <h5>Zoho Books</h5>
            </div>
            <div class="product-image">
                <img src="images/zohosalesiq.png" alt="Product 3">
                <h5>Zoho Sales Iq</h5>
            </div>
            <div class="product-image">
                <img src="images/zohodesk.png" alt="Product 4">
                <h5>Zoho Desk</h5>
            </div>
        </div>
    </div>

    <?php
// PHP code to dynamically generate more images and headings
$additionalData = array(
    array("images/zohoanalytics.png","Zoho Analytics"),
    array("images/zohorecurit.png","Zoho Recruit"),
    array("images/zohocomp.png","Zoho Campagin"),
    array("images/zohoone.png","Zoho One")
);

echo '<div class="product-container">';
echo '<div class="product-images">';
foreach ($additionalData as $data) {
    echo '<div class="product-image">';
    echo '<img src="' . $data[0] . '" alt="Product">';
    echo '<h5 class="product-heading-below">' . $data[1] . '</h5>';
    echo '</div>';
}
echo '</div>';
echo '</div>';
?>

   
<!-- End of Products Block -->


<!-- Services -->
<div class="service-container pt-4 pb-5">
    <h1 class="section-heading pt-4 py-3">Services</h1>
    <div class="service-images">
        <?php
        $additionalServices = array(
            array("Implementation", "Are you thinking about using Zoho Solutions for the first time? We have a great team to help you succeed on this journey. Our experts can assist with technical and business aspects, short and long-term goals, and integrating and customizing the solutions. Reach out to us now to get started!"),
            array("Consulting", "Did you just buy Zoho apps? Make the most of them with the support of experienced professionals. We know each business is unique. Our team will guide you through setting up Zoho, one step at a time. Our affordable service helps you use the solutions with less risk."),
            array("Support", "For a successful application setup, it's important to collaborate with skilled professionals. At Linz Technologies, we have extensive know-how in assisting business applications. Our approaches and resources help make solutions easier and faster. Reach out to our round-the-clock support now!"),
            // Add more services as needed
        );
        foreach ($additionalServices as $service) {
            echo '<div class="service-image" style="width: 27%;">';
            echo '<h3 class="service-heading pb-2">' . $service[0] . '</h3>';
            echo '<p class="service-paragraph">' . $service[1] . '</p>';
            echo '<a href="#" class="btn">Learn More</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>


 



<!-- End of Services Block-->
   
<div class="banner1">
        <div>
            <p>Implementation <span id="count1">1</span> + </p>
        </div>
        <div>
            <p>Transactions per sec <span id="count2">1</span> + </p>
        </div>
        <div>
            <p>Industries <span id="count3">1</span> + </p>
        </div>
    </div>

    <script>
        function animateCount(elementId, targetValue, duration) {
            const startValue = parseInt(document.getElementById(elementId).textContent);
            const range = targetValue - startValue;
            const increment = range / (duration / 1000);
            let currentValue = startValue;

            const interval = setInterval(() => {
                currentValue += increment;
                document.getElementById(elementId).textContent = Math.round(currentValue);

                if (currentValue >= targetValue) {
                    clearInterval(interval);
                }
            }, 10); // Increased the interval to slow down the animation
        }

        animateCount("count1", 60, 5000, 40000); // Slower animation: 1 to 60 in 5 seconds
        animateCount("count2", 1000, 36000); // Slower animation: 1 to 1000 in 4 seconds
        animateCount("count3", 10, 37000); // Slower animation: 1 to 10 in 3 seconds
    </script>

<!-- End of counting-->



<!-- Our Clients Block -->
<div class="container pt-5 pb-5">
    <div class="row py-2">
    <div class="col-md-12 text-center">
        <h2 class="section-heading">Our Clients</h2> <!-- Centered heading -->
    </div>
    </div>
    <div class="row pb-5">
        <div class="col-md-12">
            <div id="clientSlider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    // Loop through your client logos and create carousel items
                    $clientLogos = array(
                      'ammc.png',
                      'DivineArts_Logo.jpg',
                      'EF_logo.png',
                      'Eloquens Logo.png',
                      'kHotels logo.jpg',
                      'cityone.png',
                      'ensaan.png',
                      'itware.png',
                      // Add more client logos as needed
                    );

                    $logoCount = count($clientLogos);
                    $logosPerSlide = 4;

                    for ($i = 0; $i < $logoCount; $i += $logosPerSlide) {
                        $isActive = ($i === 0) ? 'active' : ''; // Set active class for the first slide
                        echo '<div class="carousel-item ' . $isActive . '">';
                        echo '<div class="row client-logo-slide">';
                        
                        for ($j = $i; $j < min($i + $logosPerSlide, $logoCount); $j++) {
                            echo '<div class="col-md-3 client-logo">';
                            echo '<img src="images/' . $clientLogos[$j] . '" alt="Client Logo" width="150" height="150">';
                            echo '</div>';
                        }
                        
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="carousel-control-prev" href="#clientSlider" role="button" data-slide="prev">
                 <i class="fas fa-chevron-left"></i> <!-- Font Awesome left arrow icon -->
                </div>
                 <div class="carousel-control-next" href="#clientSlider" role="button" data-slide="next">
                   <i class="fas fa-chevron-right"></i> <!-- Font Awesome right arrow icon -->
                   </div>

            </div>
        </div>
    </div>
</div>

<!--Zoho Authorized partner-->
<div class="container pb-5">
    <div class="row align-items-center">
        <div class="col-md-3">
            <img src="images/authorized_partner.png" class="img-fluid" alt="Image">
        </div>
        <div class="col-md-9">
            <div class="text-center">
                <h3 class="section-heading">NurtureU Technologies is one of the Zoho partner's for Zoho Implementation</h3>
                <p class="service-paragraph">We are glad to be partnering with like-minded teams that align with NurtureU’s vision,<br> uncomplicating IT solutions and implementations</p>
            </div>
        </div>
    </div>
</div>



<!--Getintouch -->

<div class="custom-body">
    <div class="block-container pb-5 pt-5 py-3">
        <h4 class="space pt-2">Are you ready to begin your Zoho journey?</h4>
        <p class="service-paragraph1 pt-1">Contact us today to discuss how NurtureU Technologies can transform <br>your business
with Zoho's innovative solutions. Together, we'll create a brighter future for your
organization.<p>
        <a href="contact_us_page_link" class="contact-button">Contact Us</a>
    </div>
                  </div>

       

<!--Testimonial-->
<div class="container pt-5">
    <div class="row ">
    <div class="col-md-12 text-center ">
        <h2 class="section-heading">What our customer says?</h2> <!-- Centered heading -->
        </div>
    </div>

   <?php
    // Array of testimonials
    $testimonials = [
        [
            'image' => 'Testimonial.png',
            'description' => "I wholeheartedly endorse NurtureU Technologies for recently implementing a CRM system in our company UV Consultants LLC FZ. NurtureU Technologies is a Zoho Authorized Partner, and they recently implemented Zoho One for our business.   

            The fantastic all-women team from NurtureU, led by Ms. Devi Sambamoorthy, gave us excellent and timely support throughout the process. Their expertise was fundamental to us customizing the applications to our preferences and quickly transitioning our operations to it. Moreover, their training gave our team the necessary skills to efficiently use the applications without wasting much time. We highly recommend NurtureU to any business looking for an experienced vendor to assist with their CRM implementation.",
            'name' => 'Valsakumar P. Menon',
            'destination' => 'Success Coach & Business Startup Mentor | ICF PCC'
        ],
       
    ];

    // Loop through testimonials and display them
    foreach ($testimonials as $testimonial) {
        echo '<div class="testimonial">';
        echo '<img src="Images/Testimonial.png" alt="' . $testimonial['name'] . '">';
        echo '<p class="service-paragraph">' . $testimonial['description'] . '</p>';
        echo '<p class="service-paragraph"><strong>' . $testimonial['name'] . '</strong><br>' . $testimonial['destination'] . '</p>';
        echo '</div>';
    }
    ?>
   
<!-- Whatsapp -->
  <?php
$phone_number = '+971564243050';
$whatsapp_link = 'https://wa.me/' . $phone_number;
?>
<div class="whatsapp-icon">
  <a href="<?php echo $whatsapp_link; ?>" target="_blank">
    <img src="images/whatsapp-icon.jpg" alt="WhatsApp Chat" style="width: 50px; height: 50px; border-radius: 20%;">
  </a>
</div>
<!--end-->
<?php include 'php/footer.php'; ?>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
 




