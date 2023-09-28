
   
    <section class="home">
        <div class="home_hinhnen">
            
        </div>
        
    </section>
    <div class="container-info">
        <div class="title-form">
          <h1 class="title-a">THÔNG TIN CÁ NHÂN</h1>
        </div>
        <b>
												<?php if (isset($_COOKIE['doimk'])) {
													echo $_COOKIE['doimk'];
												} ?>
											</b>
        <form class="student-form" action="?act=info&xuli=update" method="post">
         
          <div class="field-form">
            <input type="text" name="firstname" class="first-name" placeholder="First name" required value="<?= $data['name'] ?>">
          </div>
          
          <div class="field-form">
											
														<select class="form-control" name="GioiTinh" title="Giới tính">
															<option <?= ($data['user_sex'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Nam</option>
															<option <?= ($data['user_sex'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Nữ</option>
															<option <?= ($data['user_sex'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Khác</option>
														</select>
											
          </div>
         
          <div class="field-form ">
            <input type="text" name="mail" class="department" placeholder="Email" required value="<?= $data['user_email'] ?>">
            </div>
          <div class="field-form dep">
            <input type="text" name="SDT" class="department" placeholder="Phone" required pattern="[0-9]+" minlength="10" value="<?= $data['user_tel'] ?>" >
          </div>
          <div class="field-form">
            <input type="text" name="course" class="course" placeholder="Adress" required value="<?= $data['user_address'] ?>">
          </div> 
         
          <div class="field-form button">
            <input type="submit" name="submit" class="add" value="Update">
          </div>
        </form>
      </div>
