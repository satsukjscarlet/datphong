<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
require 'connect.php';
?>

<form class="container" action='reg.php' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Đặt Phòng đặc biệt</legend>
    </div>
    <div>
      <!-- Tiêu đề cuộc họp -->
      <div>
        <label class="control-label" for="name">Tiêu đề cuộc họp</label>
        <div class="controls">
          <input type="text" id="name" name="name" required pattern="\s*\S+.*" value="" maxlength="80">
        </div>
      </div>
      <!-- Yêu cầu thêm -->
      <div>
        <label class="control-label">Yêu cầu thêm</label>
        <div class="controls">
          <textarea id="description" name="description"></textarea>
        </div>
      </div>
      <!-- Ngày họp -->
      <div>
        <label class="control-label">Ngày đăng ký</label>
        <div class="controls">
          <input type="date" id="start_date" name="start_date" value="2022-09-21" required>
        </div>
      </div>
      <!-- Bắt đầu -->
      <div>
        <label class="control-label" for="username">Bắt đầu</label>
        <div class="controls">
          <select id="start_seconds" name="start_seconds">
            <option value="25200" selected>07:00</option>
            <option value="27000">07:30</option>
            <option value="28800">08:00</option>
            <option value="30600">08:30</option>
            <option value="32400">09:00</option>
            <option value="34200">09:30</option>
            <option value="36000">10:00</option>
            <option value="37800">10:30</option>
            <option value="39600">11:00</option>
            <option value="41400">11:30</option>
            <option value="43200">12:00</option>
            <option value="45000">12:30</option>
            <option value="46800">13:00</option>
            <option value="48600">13:30</option>
            <option value="50400">14:00</option>
            <option value="52200">14:30</option>
            <option value="54000">15:00</option>
            <option value="55800">15:30</option>
            <option value="57600">16:00</option>
            <option value="59400">16:30</option>
            <option value="61200">17:00</option>
            <option value="63000">17:30</option>
            <option value="64800">18:00</option>
            <option value="66600">18:30</option>
          </select>
        </div>
      </div>
      <!-- Bắt đầu -->
      <!-- Kết thúc -->
      <div>
        <label class="control-label" for="end_seconds">Kết thúc</label>
        <div class="controls">
          <select id="end_seconds" name="end_seconds">
            <option value="25200">07:00</option>
            <option value="27000" selected>07:30</option>
            <option value="28800">08:00</option>
            <option value="30600">08:30</option>
            <option value="32400">09:00</option>
            <option value="34200">09:30</option>
            <option value="36000">10:00</option>
            <option value="37800">10:30</option>
            <option value="39600">11:00</option>
            <option value="41400">11:30</option>
            <option value="43200">12:00</option>
            <option value="45000">12:30</option>
            <option value="46800">13:00</option>
            <option value="48600">13:30</option>
            <option value="50400">14:00</option>
            <option value="52200">14:30</option>
            <option value="54000">15:00</option>
            <option value="55800">15:30</option>
            <option value="57600">16:00</option>
            <option value="59400">16:30</option>
            <option value="61200">17:00</option>
            <option value="63000">17:30</option>
            <option value="64800">18:00</option>
            <option value="66600">18:30</option>
          </select>
        </div>
      </div>
      <!-- Kết thúc -->

      <!-- Khu vực -->
      <div>
        <label class="control-label" for="area">Khu vực</label>
        <div class="controls">
          <select id="area" name="area">
            <option value="1">Phòng họp</option>
          </select>
        </div>
      </div>
      <!-- Khu vực -->
      <!-- <script>
          $area = document.getElementById("area").value;
        </script> -->
      <!-- Phòng -->
      <div>
        <label class="control-label" for="room">Chọn phòng họp</label>
        <div class="controls">
          <?php
          $name = array();
          $sql = "SELECT * FROM `mrbs_room` where area_id = 1";
          if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                array_push($name, $row['room_name']);
              }
            }
          }
          $options = $name;
          echo "<select id='room' name='room'>";
          foreach ($options as $option) {
            if ($selected == $option) {
              echo "<option selected='selected' value='$option'>$option</option>";
            } else {
              echo "<option value='$option'>$option</option>";
            }
          }
          echo "</select>";
          ?>
        </div>
      </div>
      <!-- Phòng -->
      <!-- Kiểu -->
      <div>
        <label class="control-label" for="type">Kiểu cuộc họp</label>
        <div class="controls">
          <select id="type" name="type">
            <option value="E">Bên ngoài</option>
            <option value="I" selected>Nội bộ</option>

          </select>
        </div>
      </div>
      <!-- Kiểu -->
      <!-- Button -->
      <div>
        <input type="submit" class="default_action" name="save_button" value="Lưu lại">
      </div>
      <!-- Kiểu -->
    </div>
  </fieldset>
</form>