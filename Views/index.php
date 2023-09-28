<?php 
    // session_start();
    if (empty($_SESSION['cartb']))
        $_SESSION['cartb'] = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script
            src="https://kit.fontawesome.com/8c4b870cf3.js"
            crossorigin="anonymous"
        ></script>
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
        />
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
            rel="stylesheet"
        />
        <link
            rel="icon"
            href="https://theme.hstatic.net/200000232135/1000682292/14/favicon.png?v=274"
        />
        <link rel="icon" href="https://theme.hstatic.net/200000232135/1000682292/14/favicon.png?v=274">

        <link rel="stylesheet" href="public/css/bootstrap.min.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" href="public/css/elegant-icons.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" href="public/css/nice-select.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" href="public/css/jquery-ui.min.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" href="public/css/owl.carousel.min.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" href="public/css/slicknav.min.css?v=<?php echo time(); ?>" >
        <link rel="stylesheet" href="public/css/style.css?v=<?php echo time(); ?>" >
        <title>Food</title>
        <link rel="stylesheet" href="public/css/home.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/blog.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/about.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/menu.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/shop-delis.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/shoppingcart.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/thanhtoan.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/contact.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/serive.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/success.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/login.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="public/css/formtt.css?v=<?php echo time(); ?>" />

</head>
<body>
    <?php 
        require_once('header_footer/header.php');
    ?>

    <?php 
        require_once('redirect.php');
    ?>

    <?php 
        require_once('header_footer/footer.php');
    ?>
</body>
  <script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="public/js/home.js"></script>
  <script type="text/javascript" src="public/js/jquery.nice-select.min.js"></script>
  <script type="text/javascript" src="public/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="public/js/jquery.slicknav.js"></script>
  <script type="text/javascript" src="public/js/main.js"></script>
  <script type="text/javascript">
    const images = document.querySelectorAll(".wrapper .image img");
    const gallery = document.querySelector(".gallery");
    const galleryImg = document.querySelector(".gallery-inner img");
    const close = document.querySelector(".gallery .close_ga");

    const next = document.querySelector(".control.next_ga");
    const prev = document.querySelector(".control.prev_ga");

    let currentIndex = 0;

    images.forEach((img, index) => {
      img.addEventListener("click", () => {
        currentIndex = index;
        showGallery();
      });
    });

    function showGallery() {
      currentIndex == images.length - 1
        ? next.classList.add("hide")
        : next.classList.remove("hide");

      currentIndex == 0
        ? prev.classList.add("hide")
        : prev.classList.remove("hide");

      gallery.classList.add("show");
      galleryImg.src = images[currentIndex].src;
    }

    close.addEventListener("click", () => {
      gallery.classList.remove("show");
    });

    next.addEventListener("click", () => {
      currentIndex != images.length - 1 ? currentIndex++ : undefined;
      showGallery();
    });
    prev.addEventListener("click", () => {
      currentIndex != 0 ? currentIndex-- : undefined;
      showGallery();
    });

    // esc click
    document.addEventListener("keydown", (e) => {
      if (e.keyCode == 27) gallery.classList.remove("show");
    });

            function user_name(){
        const toggleMenu = document.querySelector('.user_menu');
        toggleMenu.classList.toggle('user_active')
    }
  </script>

</html>