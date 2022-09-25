<!-- INSERT INTO `mrbs_entry` (`id`, `start_time`, `end_time`, `entry_type`, `repeat_id`, `room_id`, `timestamp`, `create_by`, 
`modified_by`, `name`, `type`, `description`, `status`, `reminded`, `info_time`, `info_user`, 
`info_text`, `ical_uid`, `ical_sequence`, `ical_recur_id`, `allow_registration`, `registrant_limit`, 
`registrant_limit_enabled`, `registration_opens`, `registration_opens_enabled`, `registration_closes`, 
`registration_closes_enabled`) VALUES (NULL, '1664001000', '1664008200', '0', NULL, '1', '2022-09-24 13:23:20', 
'dung', '', 'Đào tạo KPI', 'I', '', '2', NULL, NULL, NULL, NULL, '', '0', NULL, '0', '0', '0', '1209600', '0', '0', '0'); -->

<?php
require 'connect.php';
require 'send_email.php';
// $total_seconds = 1209600;
// $seconds = intval($total_seconds % 60);
// $total_minutes = intval($total_seconds / 60);
// $minutes = $total_minutes % 60;
// $hours = intval($total_minutes / 60);
// echo "$hours:$minutes:$seconds";



if (isset($_POST['save_button'])) {
    // echo "Đã submit";
    echo "<pre>";
    print_r($_POST);
    // $datetime = DateTime::createFromFormat('d/m/y H:i:s', '1/1/20 00:00:00');
    // $datetime->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'))
    //     ->setDate(2022, 9, 29)
    //     ->setTime(8, 0, 0)
    //     ->format(DateTime::RFC822);

    // echo $datetime->getTimezone()->getName();   // UTC
    // echo $datetime->getTimestamp();             // 1640673059
    // echo $datetime->format('d/m - h:i'); 
    // In thông tin trong $datetime
    // echo 'Datetime tại gốc UTC 0: ' . $datetime->format('d/m/y H:i:s'), '<br>';
    //check thông tin
    if (isset($_POST['create_by'])) {
        $create_by = $_POST['create_by'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $description = 'Không';
    }
    if (isset($_POST['start_date'])) {
        $start_date = $_POST['start_date'];
    }
    if (isset($_POST['start_seconds'])) {
        $start_seconds = $_POST['start_seconds'];
        $s_seconds = intval($start_seconds % 60);
        $s_total_minutes = intval($start_seconds / 60);
        $s_minutes = $s_total_minutes % 60;
        $s_hours = intval($s_total_minutes / 60);
    }
    if (isset($_POST['end_seconds'])) {
        $end_seconds = $_POST['end_seconds'];
        $e_seconds = intval($end_seconds % 60);
        $e_total_minutes = intval($end_seconds / 60);
        $e_minutes = $e_total_minutes % 60;
        $e_hours = intval($e_total_minutes / 60);
    }
    if (isset($_POST['area'])) {
        $area = $_POST['area'];
    }
    if (isset($_POST['room'])) {
        $room = $_POST['room'];
        $sql = "SELECT * FROM `mrbs_room` where room_name = '$room'";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $room_id = $row['id'];
                }
            }
        }
    }
    if (isset($_POST['type'])) {
        $type = $_POST['type'];
    }

    $year = explode("-", $start_date)[0];
    $month = explode("-", $start_date)[1];
    $day = explode("-", $start_date)[2];
    // echo "$year:$month:$day";
    // echo "<br>";
    // echo "$s_hours: $s_minutes: $s_seconds";
    // echo "<br>";
    // echo "$e_hours: $e_minutes: $e_seconds";

    $date_start_time = DateTime::createFromFormat('d/m/y H:i:s', '1/1/20 00:00:00');
    $date_start_time->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'))
        ->setDate($year, $month, $day)
        ->setTime($s_hours, $s_minutes, $s_seconds)
        ->format(DateTime::RFC822);
    $start_time = $date_start_time->getTimestamp();

    $date_end_time = DateTime::createFromFormat('d/m/y H:i:s', '1/1/20 00:00:00');
    $date_end_time->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'))
        ->setDate($year, $month, $day)
        ->setTime($e_hours, $e_minutes, $e_seconds)
        ->format(DateTime::RFC822);
    $end_time = $date_end_time->getTimestamp();
    $timestamp = date("Y-m-d H:i:s");

    // $start_time = $_POST['start_time']; //1664001000
    // $end_time = $_POST['end_time']; //1664008200
    // $entry_type = $_POST['entry_type']; //0
    // $repeat_id = $_POST['repeat_id']; //NULL
    // $room_id = $_POST['room_id']; //1
    // $timestamp = $_POST['timestamp']; //2022-09-24 13:23:20
    // $modified_by = $_POST['modified_by']; //
    // $name = $_POST['name']; //Đào tạo KPI
    // $type = $_POST['type']; //I
    // $description = $_POST['description']; //
    $status = '2'; //2
    // $reminded = $_POST['reminded']; //null
    // $info_time = $_POST['info_time']; //null
    // $info_user = $_POST['info_user']; //null
    // $info_text = $_POST['info_text']; //null
    // $ical_uid = $_POST['ical_uid']; //
    $ical_sequence = '0'; //0
    // $ical_recur_id = $_POST['ical_recur_id']; //Null
    $allow_registration = '0'; //0
    $registrant_limit = '0'; //0
    $registrant_limit_enabled = '0'; //0
    $registration_opens = '1209600'; //1209600
    $registration_opens_enabled = '0'; //0
    $registration_closes = '0'; //0
    $registration_closes_enabled = '0'; //0




    // echo "<br>start_time";
    // echo $start_time;
    // echo "<br>end_time";
    // echo $end_time;
    // echo "<br>room_id";
    // echo $room_id;
    // echo "<br>timestamp";
    // echo $timestamp;
    // echo "<br>description";
    // echo $description;
    // echo "<br>timestamp";
    // echo $timestamp;
    // echo "<br>room_id";
    // echo $room_id;
    // echo "<br>create_by";
    // echo $create_by;
    // echo "<br>name";
    // echo $name;
    // echo "<br>type";
    // echo $type;
    // echo "<br>status";
    // echo $status;
    // echo "<br>ical_sequence";
    // echo $ical_sequence;
    // echo "<br>allow_registration";
    // echo $allow_registration;
    // echo "<br>registrant_limit";
    // echo $registrant_limit;
    // echo "<br>registrant_limit_enabled";
    // echo $registrant_limit_enabled;
    // echo "<br>registration_opens";
    // echo $registration_opens;
    // echo "<br>registration_opens_enabled";
    // echo $registration_opens_enabled;
    // echo "<br>registration_closes";
    // echo $registration_closes;
    // echo "<br>registration_closes_enabled";
    // echo $registration_closes_enabled;


    if (
        !empty($start_time)
        && !empty($end_time)
        // && !empty($description)
        && !empty($timestamp)
        && !empty($room_id)
        // && !empty($create_by)
        && !empty($name)
        && !empty($type)
        && !empty($status)
        // && !empty($ical_sequence)
        // && !empty($allow_registration) 
        // && !empty($registrant_limit) 
        // && !empty($registrant_limit_enabled)
        // && !empty($registration_opens) 
        // && !empty($registration_opens_enabled) 
        // && !empty($registration_closes) 
        // && !empty($registration_closes_enabled)
    ) {
        // echo 'đã đủ';
        $sql =  "INSERT INTO `mrbs_entry` (`id`, `start_time`, `end_time`, `entry_type`, `repeat_id`, `room_id`, `timestamp`, `create_by`, 
`modified_by`, `name`, `type`, `description`, `status`, `reminded`, `info_time`, `info_user`, 
`info_text`, `ical_uid`, `ical_sequence`, `ical_recur_id`, `allow_registration`, `registrant_limit`, 
`registrant_limit_enabled`, `registration_opens`, `registration_opens_enabled`, `registration_closes`, 
`registration_closes_enabled`) VALUES (NULL, '$start_time', '$end_time', '0', NULL, '$room_id', '$timestamp', 
'$create_by', '', '$name', '$type', '$description', '$status', NULL, NULL, NULL, NULL, '', '0', NULL, '0', '0', '0', '1209600', '0', '0', '0')";
if($conn->query($sql) == true){
    echo "Tạo cuộc họp đặc biệt thành công";
    GuiMail($email, $create_by);
    header('Location: http://localhost/datphong/web/');
}
else{
    echo "Lỗi $sql" .$conn->error;
}
    } else {
        echo 'Bạn chưa điền đủ thông tin';
        // header('Location: http://localhost/datphong/web/');
    }
}

?>