    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <div class="gallery_tieude">
      <h2 class="gallery_h2">
      THƯ VIỆN HÌNH ẢNH
      </h2>
      <div class="gallery_nd">
        Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor primis libero tempus, blandit a cursus varius magna
      </div>
  </div>
    <section class="gallery_vc">
        <div class="wrapper">
            <?php foreach($images as $image) {?>
                <div class="image">
                  <img src="<?= $image['image_url'];?>">
                </div>
              <?php } ?>
        </div>
      
          <div class="gallery">
            <span class="control prev_ga">
              <i class="fas fa-chevron-left"></i>
            </span>
            <span class="control next_ga">
              <i class="fas fa-chevron-right"></i>
            </span>
            <div class="gallery-inner">
              <img src="" alt="" />
            </div>
            <i class="fas fa-times close_ga"></i>
          </div>
       </section>
      
       <section class="openhouse">
        
           
        <h2 class="openhouse_h2">
        Chúng ta làm gì
        </h2>
        <div class="openhouse_container">
            <div class="openhouse_box">
                <div class="openhouse_logo">
                    <img src="https://miraclestudio.design/html/deliciousa-html/assets/images/icon/hours/sunny.png" alt="">
                </div>
                <div class="openhoouse_h3">
                Các loại cà phê
                </div>
                <div class="openhouse_time">
                   The way they make shows is, they make one show. That show's called a pilot. Then they show.
                  </div>
            </div>
            <div class="openhouse_box">
                <div class="openhouse_logo">
                    <img src="https://miraclestudio.design/html/deliciousa-html/assets/images/icon/hours/launch.png" alt="">
                </div>
                <div class="openhoouse_h3">
                nước giải khát các loại
                </div>
                <div class="openhouse_time">
                  The way they make shows is, they make one show. That show's called a pilot. Then they show.
                </div>
            </div>
            <div class="openhouse_box">
                <div class="openhouse_logo">
                    <img src="https://miraclestudio.design/html/deliciousa-html/assets/images/icon/hours/dinner.png" alt="">
                </div>
                <div class="openhoouse_h3">
                Tiệm bánh Pháp
                </div>
                <div class="openhouse_time">
                  The way they make shows is, they make one show. That show's called a pilot. Then they show.
                </div>
            </div>
            <div class="openhouse_box">
                <div class="openhouse_logo">
                    <img src="https://miraclestudio.design/html/deliciousa-html/assets/images/icon/hours/drinks.png" alt="">
                </div>
                <div class="openhoouse_h3">
                  Coffee to Go
                </div>
                <div class="openhouse_time">
                  The way they make shows is, they make one show. That show's called a pilot. Then they show.
                </div>
            </div>
        </div>
   
      </section>
      <section class="cuoicung">
        <div class="cuoicung_container">
          <div class="cuoicung_left">
            <img src="https://miraclestudio.design/html/deliciousa-html/assets/images/others/choose-thumb.png" alt="">
          </div>
          <div class="cuoicung_right">
            <div class="cuoicung_box">
                <div class="cuoicung_logo">
                  <i class="fas fa-award"></i>
                </div>
                <h2 class="cuoicung_h2">
                  Giao hàng có sẵn
                </h2>
                <div class="cuoicung_noidung">
                  The way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows.
                </div>
            </div>
            <div class="cuoicung_box">
              <div class="cuoicung_logo">
                <i class="fas fa-utensils"></i>
              </div>
              <h2 class="cuoicung_h2">
                Đặt hàng trực tuyến
              </h2>
              <div class="cuoicung_noidung">
                The way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows.
              </div>
          </div>
          <div class="cuoicung_box">
            <div class="cuoicung_logo">
              <i class="fas fa-hamburger"></i>
            </div>
            <h2 class="cuoicung_h2">
              Cửa hàng của chúng tôi
            </h2>
            <div class="cuoicung_noidung">
              The way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows.
            </div>
        </div>
        <div class="cuoicung_box">
          <div class="cuoicung_logo">
            <i class="fas fa-phone"></i>
          </div>
          <h2 class="cuoicung_h2">
            Hotline
          </h2>
          <div class="cuoicung_noidung">
            The way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows.
          </div>
      </div>
          </div>
        </div>
      </section>
       <!-- <script >
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


</script> -->