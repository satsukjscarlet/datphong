
</header>
<div class="contents">
<form class="standard js_hidden" id="main" action="edit_entry_handler.php" method="post">
<input type="hidden" name="csrf_token" value="a62a343cbf9387a28d4068f8569886d785d9ede421104f8dcad268ead411d456">
<input type="hidden" name="returl" value="">
<input type="hidden" name="rep_id" value="0">
<input type="hidden" name="edit_type" value="series">
<fieldset>
<legend>Đặt phòng đặc biệt</legend>
<div>
<label for="create_by">Tạo bởi</label>
<select id="create_by" name="create_by" class="ajax_usernames">
<option value="tuan" selected>Trần Thiện Tuấn</option>
</select>
</div>
<div>
<label for="name">Tiêu đề cuộc họp</label>
<input type="text" id="name" name="name" required pattern="\s*\S+.*" value="" maxlength="80">
</div>
<div class="field_text_area">
<label for="description">Yêu cầu thêm</label>
<textarea id="description" name="description"></textarea>
</div>
<div class="start_end">
<label>Bắt đầu</label>
<div>
<input type="date" id="start_date" name="start_date" value="2022-09-21" required>
<select id="start_seconds" name="start_seconds">
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
<div>
<label class="no_suffix"><input type="checkbox" name="all_day" id="all_day" data-show="1">Cả ngày</label>
</div>
<select id="start_seconds5" name="start_seconds" disabled class="keep_disabled none">
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
<div class="none">
<label class="no_suffix"><input type="checkbox" name="all_day" id="all_day5" data-show="1" disabled class="keep_disabled">Cả ngày</label>
</div>
<select id="start_seconds6" name="start_seconds" disabled class="keep_disabled none">
<option value="28800" selected>08:00</option>
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
</select>
<div class="none">
<label class="no_suffix"><input type="checkbox" name="all_day" id="all_day6" data-show="1" disabled class="keep_disabled">Cả ngày</label>
</div>
</div>
</div>
<div class="start_end">
<label>Kết thúc</label>
<div>
<input type="date" id="end_date" name="end_date" value="2022-09-21">
<select id="end_seconds" name="end_seconds">
<option value="25200">07:00</option>
<option value="27000">07:30</option>
<option value="28800">08:00</option>
<option value="30600">08:30</option>
<option value="32400">09:00</option>
<option value="34200">09:30</option>
<option value="36000">10:00</option>
<option value="37800" selected>10:30</option>
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
<option value="68400">19:00</option>
</select>
<select id="end_seconds5" name="end_seconds" disabled class="keep_disabled none">
<option value="25200">07:00</option>
<option value="27000">07:30</option>
<option value="28800">08:00</option>
<option value="30600">08:30</option>
<option value="32400">09:00</option>
<option value="34200">09:30</option>
<option value="36000">10:00</option>
<option value="37800" selected>10:30</option>
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
<option value="68400">19:00</option>
</select>
<select id="end_seconds6" name="end_seconds" disabled class="keep_disabled none">
<option value="28800">08:00</option>
<option value="30600">08:30</option>
<option value="32400">09:00</option>
<option value="34200">09:30</option>
<option value="36000">10:00</option>
<option value="37800" selected>10:30</option>
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
</select>
<span id="end_time_error" class="error"></span>
</div>
</div>
<div id="div_areas" class="none">
<label for="area">Khu vực</label>
<select id="area" name="area">
<option value="5" selected>Khu vực nhà ăn</option>
<option value="6">Nhà điều hành 5 tầng</option>
</select>
</div>
<div class="multiline" id="div_rooms">
<label title="Sử dụng Control-Click để chọn nhiều hơn một phòng" for="rooms">Phòng</label>
<select id="rooms" name="rooms[]" multiple required size="5">
<option value="7" selected>Hội trường T3 nhà ăn</option>
</select>
<select id="rooms5" name="rooms[]" multiple required disabled size="5" class="none" data-enable_periods="0" data-n_periods="2" data-default_duration="3600" data-default_duration_all_day="0" data-max_duration_enabled="0" data-max_duration_secs="7200" data-max_duration_periods="2" data-max_duration_qty="2" data-max_duration_units="tiếng" data-timezone="Asia/Ho_Chi_Minh">
<option value="7" selected>Hội trường T3 nhà ăn</option>
</select>
<select id="rooms6" name="rooms[]" multiple required disabled size="5" class="none" data-enable_periods="0" data-n_periods="2" data-default_duration="3600" data-default_duration_all_day="0" data-max_duration_enabled="0" data-max_duration_secs="7200" data-max_duration_periods="2" data-max_duration_qty="2" data-max_duration_units="tiếng" data-timezone="Asia/Ho_Chi_Minh">
<option value="12" selected>Hội trường lớn</option>
<option value="10">Phòng họp số 2 - Tầng 4ĐH</option>
<option value="11">Phòng họp số 3 - Tầng 5ĐH</option>
<option value="9">Phòng họp VIP3</option>
</select>
</div>
<div>
<label for="type">Kiểu</label>
<select id="type" name="type">
<option value="E">Bên ngoài</option>
<option value="I" selected>Nội bộ</option>
</select>
</div>
</fieldset>
<fieldset id="registration">
<div>
<label for="allow_registration">Cho phép đăng ký</label>
<input type="checkbox" id="allow_registration" name="allow_registration">
</div>
<div>
<label for="registrant_limit_enabled">Đặt sức chứa sự kiện</label>
<input type="checkbox" id="registrant_limit_enabled" name="registrant_limit_enabled" class="enabler" checked>
</div>
<div>
<label for="registrant_limit">Sức chứa sự kiện</label>
<input type="number" step="1" id="registrant_limit" name="registrant_limit" min="0" value="1">
</div>
<div>
<label>Mở đăng ký</label>
<div>
<input type="checkbox" name="registration_opens_enabled" class="enabler">
<input type="number" step="1" name="registration_opens_value" value="2" min="0">
<select name="registration_opens_units">
<option value="seconds">giây</option>
<option value="minutes">phút</option>
<option value="hours">tiếng</option>
<option value="days">ngày</option>
<option value="weeks" selected>tuần</option>
</select>
<span>sau</span>
</div>
</div>
<div>
<label>Kết thúc đăng ký</label>
<div>
<input type="checkbox" name="registration_closes_enabled" class="enabler">
<input type="number" step="1" name="registration_closes_value" value="0">
<select name="registration_closes_units">
<option value="seconds" selected>giây</option>
<option value="minutes">phút</option>
<option value="hours">tiếng</option>
<option value="days">ngày</option>
<option value="weeks">tuần</option>
</select>
<span>sau</span>
</div>
</div>
</fieldset>
<fieldset id="rep_info">
<div id="rep_type" class="multiline">
<label>Kiểu lặp</label>
<div>
<div class="group long">
<label><input type="radio" name="rep_type" value="0" checked>Không</label>
<label><input type="radio" name="rep_type" value="1">Hàng ngày</label>
<label><input type="radio" name="rep_type" value="2">Hàng tuần</label>
<label><input type="radio" name="rep_type" value="3">Hàng tháng</label>
<label><input type="radio" name="rep_type" value="4">Hàng năm</label>
</div>
<fieldset class="rep_type_details js_none" id="rep_weekly">
<div id="rep_day">
<label>Ngày lặp lại</label>
<div class="group">
<label><input type="checkbox" name="rep_day[]" value="0">Sun</label>
<label><input type="checkbox" name="rep_day[]" value="1">Mon</label>
<label><input type="checkbox" name="rep_day[]" value="2">Tue</label>
<label><input type="checkbox" name="rep_day[]" value="3" checked>Wed</label>
<label><input type="checkbox" name="rep_day[]" value="4">Thu</label>
<label><input type="checkbox" name="rep_day[]" value="5">Fri</label>
<label><input type="checkbox" name="rep_day[]" value="6">Sat</label>
</div>
</div>
</fieldset>
<fieldset class="rep_type_details js_none" id="rep_monthly">
<fieldset>
<label class="no_suffix"><input type="radio" name="month_type" value="0" checked>Vào ngày</label>
<select name="month_absolute">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option selected>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
</fieldset>
<fieldset>
<label class="no_suffix"><input type="radio" name="month_type" value="1">Vào tháng</label>
<select name="month_relative_ord">
<option value="1">đầu tiên</option>
<option value="2">thứ hai</option>
<option value="3" selected>thứ ba</option>
<option value="4">thứ tư</option>
<option value="5">thứ năm</option>
<option value="-1">cuối cùng</option>
<option value="-2">thứ hai cuối cùng</option>
<option value="-3">thứ ba cuối cùng</option>
<option value="-4">thứ tư cuối cùng</option>
<option value="-5">thứ năm cuối cùng</option>
</select>
<select name="month_relative_day">
<option value="SU">Sunday</option>
<option value="MO">Monday</option>
<option value="TU">Tuesday</option>
<option value="WE" selected>Wednesday</option>
<option value="TH">Thursday</option>
<option value="FR">Friday</option>
<option value="SA">Saturday</option>
</select>
</fieldset>
</fieldset>
</div>
</div>
<div>
<label for="rep_interval">Lặp lại mỗi</label>
<input type="number" step="1" id="rep_interval" name="rep_interval" min="1" value="1">
<span id="interval_units"></span>
</div>
<div>
<label for="rep_end_date">Ngày kết thúc vòng lặp</label>
<input type="date" id="rep_end_date" name="rep_end_date" value="2022-09-21">
</div>
<div>
<label for="skip">Bỏ qua xung đột cũ</label>
<input type="checkbox" id="skip" name="skip">
</div>
</fieldset>
<fieldset>
<div class="submit_buttons">
<label class="no_suffix">
<input type="submit" name="back_button" value="Trở lại" formnovalidate>
</label>
<div>
<input type="submit" class="default_action" name="save_button" value="Lưu lại">
<div id="checks">
<span id="conflict_check"></span>
<span id="policy_check"></span>
</div>
</div>
</div>
</fieldset>
</form>