<link rel="stylesheet" href="finfi_form.css">
<form action="" method="POST">
					  <div class="form-group">
					    <label for="name">Name : </label>
					    <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['fname']; ?>" readonly>
					  </div>
					  <div class="form-group">
					    <label for="mobile">Mobile : </label>
					    <input type="Number" class="form-control" name="mobile" value="<?php echo $finfo_rows['mobile']; ?>" >
					  </div>
					  <!-- Add Here Another contact Number  -->
					  <div class="form-group">
					    <label for="email">Email : </label>
					    <input type="email" class="form-control" name="email" value="<?php echo $finfo_rows['email']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="Permant Address">Permant Address : </label>
					    <textarea type="text" class="form-control" name="adrper" > <?php echo $finfo_rows['adrper']; ?></textarea>
					  </div>
					  <div class="form-group">
					    <label for="Current Address">Current Address : </label>
					    <textarea type="text" class="form-control" name="adrcur"> <?php echo $finfo_rows['adrcur']; ?> </textarea>
					  </div>
					  <div class="form-group">
					    <label for="Aim">Aim : </label>
					    <input type="text" class="form-control" name="aim" value="<?php echo $finfo_rows['aim']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="fcolor">Favourite Color : </label>
					    <input type="text" class="form-control" name="fcolor" value="<?php echo $finfo_rows['fcolor']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="ffood">Favourite Food : </label>
					    <input type="text" class="form-control" name="ffood" value="<?php echo $finfo_rows['ffood']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="factor">Favourite Actor : </label>
					    <input type="text" class="form-control" name="factor" value="<?php echo $finfo_rows['factor']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="factress">Favourite Actress : </label>
					    <input type="text" class="form-control" name="factress" value="<?php echo $finfo_rows['factress']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="fmovie">Favourite Movie : </label>
					    <input type="text" class="form-control" name="fmovie" value="<?php echo $finfo_rows['fmovie']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="fsong">Favourite Song : </label>
					    <input type="text" class="form-control" name="fsong" value="<?php echo $finfo_rows['fsong']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="ftp">Favourite Timepass : </label>
					    <input type="text" class="form-control" name="ftp" value="<?php echo $finfo_rows['ftp']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="dob">Birthday : </label>
					    <input type="date" class="form-control" name="dob" value="<?php echo $finfo_rows['dob']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="ourf">Our Friendship : </label>
					    <textarea type="text" class="form-control" name="ourf"> <?php echo $finfo_rows['ourf']; ?> </textarea>
					  </div>
					  <div class="form-group">
					    <label for="aboutme">About Me : </label>
					    <textarea type="text" class="form-control" name="aboutme" > <?php echo $finfo_rows['aboutme']; ?> </textarea>
					  </div>
					  <div class="form-group">
					    <label for="ideal">Ideal : </label>
					    <input type="text" class="form-control" name="ideal" value="<?php echo $finfo_rows['ideal']; ?>" >
					  </div>
					  <div class="form-group">
					    <label for="status">Current Status : </label>
					    <input type="text" class="form-control" name="status" value="<?php echo $finfo_rows['status']; ?>" >
					  </div>

					  <div class="checkbox">
					    <label><input type="checkbox"> I Want To Update Slambook </label>
					  </div>
					  <div class="form-group">
					  <input type="submit" name="update" value="Update" style="color: black;">
					  </div>
					  <!--button type="submit" class="btn btn-default">Update</button-->
					</form>		
