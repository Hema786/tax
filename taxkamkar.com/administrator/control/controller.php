<?php
session_start();
require_once "Auth.php";
require_once "Util.php";

//PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$auth = new Auth();
$db_handle = new DBController();
$util = new Util();
$conn = $db_handle->connectDB();

require_once "authCookieSessionValidate.php";

$date = date_default_timezone_set('Asia/Kolkata');

function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds') {
	$sets = array();
	if(strpos($available_sets, 'l') !== false)
		$sets[] = 'abcdefghjkmnpqrstuvwxyz';
	if(strpos($available_sets, 'u') !== false)
		$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
	if(strpos($available_sets, 'd') !== false)
		$sets[] = '23456789';
	if(strpos($available_sets, 's') !== false)
		$sets[] = '!@#$%&*?';

	$all = '';
	$password = '';
	foreach($sets as $set)
	{
		$password .= $set[array_rand(str_split($set))];
		$all .= $set;
	}

	$all = str_split($all);
	for($i = 0; $i < $length - count($sets); $i++)
		$password .= $all[array_rand($all)];

	$password = str_shuffle($password);

	if(!$add_dashes)
		return $password;

	$dash_len = floor(sqrt($length));
	$dash_str = '';
	while(strlen($password) > $dash_len)
	{
		$dash_str .= substr($password, 0, $dash_len) . '-';
		$password = substr($password, $dash_len);
	}
	$dash_str .= $password;
	return $dash_str;
}

function sendmail($toemail, $toname, $subject, $body, $altbody) {
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'johndoe26011991@gmail.com';                     // SMTP username
    $mail->Password   = 'Macbook_123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@taxkamkar.com', 'Taxkamkar');
    $mail->addAddress($toemail, $toname);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $altbody;
    $mail->send();
}

if ($isLoggedIn) {
    $user = $auth->getMemberByID($_SESSION['user_id']);
    if($_POST) {
        if($_POST["form_type"] == 'create_plan') {
            if($_POST['title'] == null || $_POST['title'] == '') {
                $_SESSION['error'] = "Title is Mandatory";
                $util->redirect('http://taxkamkar.com/administrator/create_plan.php');
                die();
            }
            if($_POST['price'] == null || $_POST['price'] == '') {
                $_SESSION['error'] = "Price is Mandatory";
                $util->redirect('http://taxkamkar.com/administrator/create_plan.php');
                die();
            }
            if($_POST['recommended'] == null || $_POST['recommended'] == '') {
                $recommended = '';
            } else {
                $recommended = $_POST['recommended'];
            }
            if($_POST['tenure'] == null || $_POST['tenure'] == '') {
                $tenure = '';
            } else {
                $tenure = $_POST['tenure'];
            }
            if($_POST['line1'] == null || $_POST['line1'] == '') {
                $line1 = '';
            } else {
                $line1 = $_POST['line1'];
            }
            if($_POST['line2'] == null || $_POST['line2'] == '') {
                $line2 = '';
            } else {
                $line2 = $_POST['line2'];
            }
            if($_POST['line3'] == null || $_POST['line3'] == '') {
                $line3 = '';
            } else {
                $line3 = $_POST['line3'];
            }
            if($_POST['line4'] == null || $_POST['line4'] == '') {
                $line4 = '';
            } else {
                $line4 = $_POST['line4'];
            }
            if($_POST['line5'] == null || $_POST['line5'] == '') {
                $line5 = '';
            } else {
                $line5 = $_POST['line5'];
            }
            if($_POST['line6'] == null || $_POST['line6'] == '') {
                $line6 = '';
            } else {
                $line6 = $_POST['line6'];
            }
            $query = "INSERT INTO `pricingplan`(`title`, `price`, `recommended`, `tenure`, `line1`, `line2`, `line3`, `line4`, `line5`, `line6`) VALUES ('".$_POST['title']."','".$_POST['price']."','".$recommended."','".$tenure."','".$line1."','".$line2."','".$line3."','".$line4."','".$line5."','".$line6."')";
            if ($conn->query($query) === TRUE) {
                $_SESSION['success'] = "Plan created successfully";
                $util->redirect('http://taxkamkar.com/administrator/plans.php');
                die();
            } else {
                $_SESSION['error'] = "Error creating plan: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/create_plan.php');
                die();
            }
        } else if($_POST['form_type'] == 'profile_update') {
            if($_POST['first_name'] == null || $_POST['first_name'] == '') {
                $_SESSION['error'] = "First Name is Mandatory";
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
            if($_POST['last_name'] == null || $_POST['last_name'] == '') {
                $_SESSION['error'] = "Last Name is Mandatory";
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
            if($_POST['email'] == null || $_POST['email'] == '') {
                $_SESSION['error'] = "Email is Mandatory";
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
            $loggedin_userID = $_SESSION['user_id'];
            $query = "UPDATE `users` SET `first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`email`='".$_POST['email']."',`phone`='".$_POST['phone']."',`address`='".$_POST['address']."',`gender`='".$_POST['gender']."',`dob`='".$_POST['dob']."' WHERE `id`=".$loggedin_userID;
            if ($conn->query($query) === TRUE) {
                $_SESSION['success'] = "Record updated successfully";
                $util->redirect('http://taxkamkar.com/administrator/index.php');
                die();
            } else {
                $_SESSION['error'] = "Error updating record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
        } else if($_POST['form_type'] == 'site_settings') {
            $from = $_POST['from_time'];
            $sql_from = "UPDATE `site_settings` SET `meta_value`='".$from."' WHERE `meta_name`='from_time'";
            $conn->query($sql_from);
            $to = $_POST['to_time'];
            $sql_to = "UPDATE `site_settings` SET `meta_value`='".$to."' WHERE `meta_name`='to_time'";
            $conn->query($sql_to);
            $weekend = $_POST['weekends'];
            $sql_weekend = "UPDATE `site_settings` SET `meta_value`='".$weekend."' WHERE `meta_name`='weekend'";
            $conn->query($sql_weekend);
            $booking_time = $_POST['booking_time'];
            $sql_booking_time = "UPDATE `site_settings` SET `meta_value`='".$booking_time."' WHERE `meta_name`='booking_time'";
            $conn->query($sql_booking_time);
            
            $_SESSION['success'] = "Setting Saved";
            $util->redirect('http://taxkamkar.com/administrator/site_settings.php');
            die();
        } else if($_POST['form_type'] == 'change_password') {
            if(!isset($_POST['current_password'])) {
                $_SESSION['error'] = "Please enter your current password correctly";
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
            if(!isset($_POST['new_password'])) {
                $_SESSION['error'] = "Please enter new password correctly";
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
            $user = $auth->getMemberByID($_SESSION['user_id']);
            if(password_verify($_POST['current_password'], $user[0]['password'])) {
                $query = "UPDATE `users` SET `password`='".$_POST['new_password']."' WHERE `id`=".$_SESSION['user_id'];
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = "Password updated successfully";
                    $util->redirect('http://taxkamkar.com/administrator/index.php');
                    die();
                } else {
                    $_SESSION['error'] = "Error updating password: " . $conn->error;
                    $util->redirect('http://taxkamkar.com/administrator/profile.php');
                    die();
                }
            } else {
                $_SESSION['error'] = "Please enter your current password correctly";
                $util->redirect('http://taxkamkar.com/administrator/profile.php');
                die();
            }
        } else if($_POST['form_type'] == 'create_admin') {
            if(!isset($_POST['first_name'])) {
                $_SESSION['error'] = "Please enter first name";
                $util->redirect('http://taxkamkar.com/administrator/create_admin.php');
                die();
            }
            if(!isset($_POST['last_name'])) {
                $_SESSION['error'] = "Please enter last name";
                $util->redirect('http://taxkamkar.com/administrator/create_admin.php');
                die();
            }
            if(!isset($_POST['email'])) {
                $_SESSION['error'] = "Please enter email correctly";
                $util->redirect('http://taxkamkar.com/administrator/create_admin.php');
                die();
            } else {
                $query_email_check = "SELECT * FROM users WHERE email=".$_POST['email']."AND role !=4 AND role !=5";
                $result_email_check = $conn->query($query_email_check);
                if ($result_email_check->num_rows > 0) {
                    $_SESSION['error'] = "Email is already registered with us";
                    $util->redirect('http://taxkamkar.com/administrator/create_admin.php');
                    die();  
                }
            }
            if(!isset($_POST['roles'])) {
                $_SESSION['error'] = "Please select a role";
                $util->redirect('http://taxkamkar.com/administrator/create_admin.php');
                die();
            }
            $password = generateStrongPassword();
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO `users`(`first_name`, `last_name`, `role`, `email`, `password`, `status`) VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['roles']."','".$_POST['email']."','".$password_hash."',1)";
            if ($conn->query($query) === TRUE) {
                $toemail = $_POST['email'];
                $toname = $_POST['first_name'].' '.$_POST['last_name'];
                $subject = "You're Welcome! Please check for your admin creds on Taxkamkar";
                $body = "<p>Hello ".$_POST['first_name'].",</p>";
                $body .= "<p>We are pleased to inform that you're now part of our Taxkamkar family.</p>";
                $body .= "<p>Please check below and use the given credentials to get started</p>";
                $body .= "<p><span style='font-style: italic; font-weight: bold;'>Email:- </span><span>".$_POST['email']."</span></p>";
                $body .= "<p><span style='font-style: italic; font-weight: bold;'>Password:- </span><span>".$password."</span></p>";
                $body .= "<p>Hope you are excited too!</p>";
                $body .= "<p>In case of any questions, Please feel free to contact us</p>";
                $body .= "<p>Regards,</p>";
                $body .= "<p>Taxkamkar Family</p>";
                $altbody = "please find the details below";
                $altbody .= "Email:- ".$_POST['email'];
                $altbody .= "Password:- ".$password;
                sendmail($toemail, $toname, $subject, $body, $altbody);
                $_SESSION['success'] = "Admin Created successfully";
                $util->redirect('http://taxkamkar.com/administrator/admins.php');
                die();
            } else {
                $_SESSION['error'] = "Error inserting record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/create_admin.php');
                die();
            }
        } else if($_POST['form_type'] == 'update_admin') {
            if(!isset($_POST['first_name'])) {
                $_SESSION['error'] = "Please enter first name";
                $util->redirect('http://taxkamkar.com/administrator/edit_admin.php?id='.$_POST['admin_id']);
                die();
            }
            if(!isset($_POST['last_name'])) {
                $_SESSION['error'] = "Please enter last name";
                $util->redirect('http://taxkamkar.com/administrator/edit_admin.php?id='.$_POST['admin_id']);
                die();
            }
            if(!isset($_POST['email'])) {
                $_SESSION['error'] = "Please enter email correctly";
                $util->redirect('http://taxkamkar.com/administrator/edit_admin.php?id='.$_POST['admin_id']);
                die();
            }
            if(!isset($_POST['roles'])) {
                $_SESSION['error'] = "Please select a role";
                $util->redirect('http://taxkamkar.com/administrator/edit_admin.php?id='.$_POST['admin_id']);
                die();
            }
            $admin_id = $_POST['admin_id'];
            $gues = implode(',',$_POST['guests']);
            $query = "UPDATE `users` SET `first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`role`='".$_POST['roles']."',`assigned_ca_id`='".$gues."' WHERE id=".$admin_id;
            if ($conn->query($query) === TRUE) {
                $_SESSION['success'] = "Admin Updated successfully";
                $util->redirect('http://taxkamkar.com/administrator/edit_admin.php?id='.$_POST['admin_id']);
                die();
            } else {
                $_SESSION['error'] = "Error updating record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/edit_admin.php?id='.$_POST['admin_id']);
                die();
            }
        } else if($_POST['form_type'] == 'update_user') {
            if(!isset($_POST['first_name'])) {
                $_SESSION['error'] = "Please enter first name";
                $util->redirect('http://taxkamkar.com/administrator/edit_user.php?id='.$_POST['user_id']);
                die();
            }
            if(!isset($_POST['last_name'])) {
                $_SESSION['error'] = "Please enter last name";
                $util->redirect('http://taxkamkar.com/administrator/edit_user.php?id='.$_POST['user_id']);
                die();
            }
            if(!isset($_POST['email'])) {
                $_SESSION['error'] = "Please enter email correctly";
                $util->redirect('http://taxkamkar.com/administrator/edit_user.php?id='.$_POST['user_id']);
                die();
            }
            if(!isset($_POST['phone'])) {
                $_SESSION['error'] = "Please select a phone";
                $util->redirect('http://taxkamkar.com/administrator/edit_user.php?id='.$_POST['user_id']);
                die();
            }
            $user_id = $_POST['user_id'];
            $query = "UPDATE `users` SET `first_name`='".$_POST['first_name']."',`last_name`='".$_POST['last_name']."',`phone`='".$_POST['phone']."' WHERE id=".$user_id;
            if ($conn->query($query) === TRUE) {
                $_SESSION['success'] = "Admin Updated successfully";
                $util->redirect('http://taxkamkar.com/administrator/edit_user.php?id='.$_POST['user_id']);
                die();
            } else {
                $_SESSION['error'] = "Error updating record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/edit_user.php?id='.$_POST['user_id']);
                die();
            }
        } else if($_POST['form_type'] == 'update_plan') {
            if(!isset($_POST['title'])) {
                $_SESSION['error'] = "Please enter title";
                $util->redirect('http://taxkamkar.com/administrator/edit_plan.php?id='.$_POST['plan_id']);
                die();
            }
            if(!isset($_POST['price'])) {
                $_SESSION['error'] = "Please enter price";
                $util->redirect('http://taxkamkar.com/administrator/edit_plan.php?id='.$_POST['plan_id']);
                die();
            }
            if(!isset($_POST['tenure'])) {
                $_SESSION['error'] = "Please enter tenure";
                $util->redirect('http://taxkamkar.com/administrator/edit_plan.php?id='.$_POST['plan_id']);
                die();
            }
            if($_POST['recommended'] == null || $_POST['recommended'] == '') {
                $recommended = '';
            } else {
                $recommended = $_POST['recommended'];
            }
            if($_POST['tenure'] == null || $_POST['tenure'] == '') {
                $tenure = '';
            } else {
                $tenure = $_POST['tenure'];
            }
            if($_POST['line1'] == null || $_POST['line1'] == '') {
                $line1 = '';
            } else {
                $line1 = $_POST['line1'];
            }
            if($_POST['line2'] == null || $_POST['line2'] == '') {
                $line2 = '';
            } else {
                $line2 = $_POST['line2'];
            }
            if($_POST['line3'] == null || $_POST['line3'] == '') {
                $line3 = '';
            } else {
                $line3 = $_POST['line3'];
            }
            if($_POST['line4'] == null || $_POST['line4'] == '') {
                $line4 = '';
            } else {
                $line4 = $_POST['line4'];
            }
            if($_POST['line5'] == null || $_POST['line5'] == '') {
                $line5 = '';
            } else {
                $line5 = $_POST['line5'];
            }
            if($_POST['line6'] == null || $_POST['line6'] == '') {
                $line6 = '';
            } else {
                $line6 = $_POST['line6'];
            }
            $plan_id = $_POST['plan_id'];
            $query = "UPDATE `pricingplan` SET `title`='".$_POST['title']."',`price`='".$_POST['price']."',`recommended`='".$recommended."',`tenure`='".$tenure."',`line1`='".$line1."',`line2`='".$line2."',`line3`='".$line3."',`line4`='".$line4."',`line5`='".$line5."',`line6`='".$line6."' WHERE id=".$plan_id;
            if ($conn->query($query) === TRUE) {
                $_SESSION['success'] = "Plan Updated successfully";
                $util->redirect('http://taxkamkar.com/administrator/edit_plan.php?id='.$_POST['user_id']);
                die();
            } else {
                $_SESSION['error'] = "Error updating record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/edit_plan.php?id='.$_POST['user_id']);
                die();
            }
        } else if($_POST['form_type'] == 'create_role') { 
            if(!isset($_POST['name'])) {
                $_SESSION['error'] = "Please enter name";
                $util->redirect('http://taxkamkar.com/administrator/create_role.php');
                die();
            }
            if(!isset($_POST['permissions'])) {
                $_SESSION['error'] = "Please select permissions";
                $util->redirect('http://taxkamkar.com/administrator/create_role.php');
                die();
            }
            $permis = implode(',',$_POST['permissions']);
            $query = "INSERT INTO `roles`(`role_name`, `role_permission_ids`) VALUES ('".$_POST['name']."','".$permis."')";
            if ($conn->query($query) === TRUE) {
                $_SESSION['success'] = "Role Created successfully";
                $util->redirect('http://taxkamkar.com/administrator/roles.php');
                die();
            } else {
                $_SESSION['error'] = "Error inserting record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/create_role.php');
                die();
            }
        } else if($_POST['form_type'] == 'create_user') { 
            if(!isset($_POST['first_name'])) {
                $_SESSION['error'] = "Please enter first name";
                $util->redirect('http://taxkamkar.com/administrator/create_user.php');
                die();
            }
            if(!isset($_POST['last_name'])) {
                $_SESSION['error'] = "Please enter last name";
                $util->redirect('http://taxkamkar.com/administrator/create_user.php');
                die();
            }
            if(!isset($_POST['email'])) {
                $_SESSION['error'] = "Please enter email";
                $util->redirect('http://taxkamkar.com/administrator/create_user.php');
                die();
            } else {
                $query_email_check = "SELECT * FROM users WHERE email=".$_POST['email']."AND role !=4";
                $result_email_check = $conn->query($query_email_check);
                if ($result_email_check->num_rows > 0) {
                    $_SESSION['error'] = "Email is already registered with us";
                    $util->redirect('http://taxkamkar.com/administrator/create_user.php');
                    die();  
                }
            }
            if(isset($_POST['phone'])) {
                $phone = $_POST['phone'];
            } else {
                $phone = "";
            }
            $password = generateStrongPassword();
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO `users`(`first_name`, `last_name`, `role`, `email`, `password`, `status`, `phone`) VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','4','".$_POST['email']."','".$password_hash."',1,'".$phone."')";
            if ($conn->query($query) === TRUE) {
                $toemail = $_POST['email'];
                $toname = $_POST['first_name'].' '.$_POST['last_name'];
                $subject = "You're Welcome! Please check for your creds on Taxkamkar";
                $body = "<p>Hello ".$_POST['first_name'].",</p>";
                $body .= "<p>We are pleased to inform that you're now a respectfull part of our Taxkamkar family.</p>";
                $body .= "<p>Please check below and use the given credentials to get started</p>";
                $body .= "<p><span style='font-style: italic; font-weight: bold;'>Email:- </span><span>".$_POST['email']."</span></p>";
                $body .= "<p><span style='font-style: italic; font-weight: bold;'>Password:- </span><span>".$password."</span></p>";
                $body .= "<p>Hope you are excited too!</p>";
                $body .= "<p>In case of any questions, Please feel free to contact us</p>";
                $body .= "<p>Regards,</p>";
                $body .= "<p>Taxkamkar Family</p>";
                $altbody = "please find the details below";
                $altbody .= "Email:- ".$_POST['email'];
                $altbody .= "Password:- ".$password;
                sendmail($toemail, $toname, $subject, $body, $altbody);
                $_SESSION['success'] = "User created successfully";
                $util->redirect('http://taxkamkar.com/administrator/registered_user.php');
                die();
            } else {
                $_SESSION['error'] = "Error inserting record: " . $conn->error;
                $util->redirect('http://taxkamkar.com/administrator/create_user.php');
                die();
            }
        } else if($_POST['form_type'] == 'view_user') { 
            if(!isset($_POST['userid'])) {
                echo "Something went wrong! Please try again";
                die();
            }
            $user_detail = "SELECT * FROM `users` WHERE `id`=".$_POST['userid'];
            $result_user_detail = $conn->query($user_detail);
            $user_timelinedetails = "SELECT * FROM `user_timeline` WHERE `user_id`=".$_POST['userid']." ORDER BY id DESC";
            $result_timelinedetails = $conn->query($user_timelinedetails);
            $row_user = $result_user_detail->fetch_assoc();

            $html = "<div class='modal-header'>";
            $html .= "<h4 class='modal-title'>".$row_user['first_name']." ".$row_user['last_name']."'s Profile</h4>";
            $html .= "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
            $html .= "</div>";
            $html .= "<div class='modal-body'>";
            $html .= "<div class='row'>";
            $html .= "<div class='col-md-3'>";
            $html .= '<div class="card card-primary card-outline">';
            $html .= '<div class="card-body box-profile">';
            $html .= '<div class="text-center">';
            $html .= $row_user['email'];
            $html .= '</div>';
            $html .= '<h3 class="profile-username text-center">('.$row_user["first_name"].' '.$row_user["last_name"].')</h3>';
            $html .= '<p class="text-muted text-center"><span style="font-style: italic;">Phone: </span><span>'.$row_user["phone"].'</span></p>';
            $html .= '<ul class="list-group list-group-unbordered mb-3">';
            $html .= '<li class="list-group-item">';
            $html .= '<b>DOB</b> <a class="float-right">'.$row_user["dob"].'</a>';
            $html .= '</li>';
            $html .= '<li class="list-group-item">';
            $html .= '<b>Web Interaction</b> <a class="float-right">'.$result_timelinedetails->num_rows.'</a>';
            $html .= '</li>';
            $html .= '<li class="list-group-item">';
            $html .= '<b>Address</b> <a class="float-right">'.$row_user["address"].'</a>';
            $html .= '</li>';
            $html .= '</ul>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= "</div>";
            $html .= "<div class='col-md-9'>";
            $html .= "<div class='card'>";
            $html .= '<div class="card-header p-2">';
            $html .= '<h3 class="card-title">Guest Timeline</h3>';
            $html .= '</div>';
            $html .= '<div class="card-body">';
            $html .= '<div class="tab-content">';
            $html .= '<div class="active tab-pane" id="timeline">';
            $html .= '<div class="timeline timeline-inverse">';
            $dt = 0;
            while($row_userdetails = $result_timelinedetails->fetch_assoc()) {
                if($dt==0 || $row_userdetails['date'] != $dt) {
                    $html .= '<div class="time-label">';
                    $html .= '<span class="bg-danger">';
                    $html .= $row_userdetails['date'];
                    $html .= '</span>';
                    $html .= '</div>';
                    $dt = $row_userdetails['date'];
                }
                    
                $html .= '<div>';
                $html .= '<i class="fas fa-envelope bg-primary"></i>';

                $html .= '<div class="timeline-item">';
                $html .= '<span class="time"><i class="far fa-clock"></i> '.$row_userdetails["time"].'</span>';

                $html .= '<h3 class="timeline-header">Visited '.$row_userdetails["browsed"].'</h3>';
                $html .= '</div>';
                $html .= '</div>';
            }
            
            $html .= '</div>';
            $html .= '</div>';
            $html .= "</div>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "</div>";
            $html .= "<div class='modal-footer'>";
            $html .= "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
            $html .= "</div>";
            
            echo $html; die();
        } else {
            $util->redirect('http://taxkamkar.com/administrator/index.php');
        }
    } else if ($_GET) {
        if($_GET['action']=='delete_admin') {
            if(isset($_GET['id'])) {
                $query = "DELETE FROM `users` WHERE `id`=".$_GET['id'];
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = "Admin deleted successfully";
                    $util->redirect('http://taxkamkar.com/administrator/admins.php');
                    die();
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    $util->redirect('http://taxkamkar.com/administrator/admins.php');
                    die();
                }
            } else {
                $_SESSION['error'] = "Something went wrong";
                $util->redirect('http://taxkamkar.com/administrator/admins.php');
                die();
            }
        } else if($_GET['action']=='delete_role') {
            if(isset($_GET['id'])) {
                $query = "DELETE FROM `roles` WHERE `id`=".$_GET['id'];
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = "Role deleted successfully";
                    $util->redirect('http://taxkamkar.com/administrator/roles.php');
                    die();
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    $util->redirect('http://taxkamkar.com/administrator/roles.php');
                    die();
                }
            } else {
                $_SESSION['error'] = "Something went wrong";
                $util->redirect('http://taxkamkar.com/administrator/roles.php');
                die();
            }
        } else if($_GET['action']=='delete_user') {
            if(isset($_GET['id'])) {
                $query = "DELETE FROM `users` WHERE `id`=".$_GET['id'];
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = "User deleted successfully";
                    $util->redirect('http://taxkamkar.com/administrator/registered_user.php');
                    die();
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    $util->redirect('http://taxkamkar.com/administrator/registered_user.php');
                    die();
                }
            } else {
                $_SESSION['error'] = "Something went wrong";
                $util->redirect('http://taxkamkar.com/administrator/registered_user.php');
                die();
            }
        } else if($_GET['action']=='delete_plan') {
            if(isset($_GET['id'])) {
                $query = "DELETE FROM `pricingplan` WHERE `id`=".$_GET['id'];
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = "Plan deleted successfully";
                    $util->redirect('http://taxkamkar.com/administrator/plans.php');
                    die();
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    $util->redirect('http://taxkamkar.com/administrator/plans.php');
                    die();
                }
            } else {
                $_SESSION['error'] = "Something went wrong";
                $util->redirect('http://taxkamkar.com/administrator/plans.php');
                die();
            }
        } else if($_GET['action']=='delete_prospect') {
            if(isset($_GET['id'])) {
                $query = "DELETE FROM `users` WHERE `id`=".$_GET['id'];
                if ($conn->query($query) === TRUE) {
                    $_SESSION['success'] = "Prospect deleted successfully";
                    $util->redirect('http://taxkamkar.com/administrator/all_prospects.php');
                    die();
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    $util->redirect('http://taxkamkar.com/administrator/all_prospects.php');
                    die();
                }
            } else {
                $_SESSION['error'] = "Something went wrong";
                $util->redirect('http://taxkamkar.com/administrator/all_prospects.php');
                die();
            }
        } else {
            $_SESSION['error'] = "Something went wrong";
            $util->redirect('http://taxkamkar.com/administrator/index.php');
            die();
        }
    } else {
        $_SESSION['error'] = "Something went wrong";
        $util->redirect('http://taxkamkar.com/administrator/admins.php');
        die();
    }
} else {
    //Front data Save
    if($_POST) {
        if($_POST['action'] == 'front_user_create') {
            if($_POST['form_type'] == 'hra') {
                $email_address = $_POST['email'];
                //Check if user exist, if yes get id of the user else create and get the id of the user
                $query_email_check = "SELECT * FROM users WHERE email='".$_POST['email']."' AND role=4 OR role=5";
                $result_email_check = $conn->query($query_email_check);
                if ($result_email_check->num_rows > 0) {
                    //Get Id
                    $row_user = $result_email_check->fetch_assoc();
                    $id = $row_user['id'];
                    //Insert record in timeline
                    $date = date("d/m/Y");
                    $time = date("h:i A");
                    $insert_timeline = "INSERT INTO `user_timeline`(`user_id`, `browsed`, `date`, `time`) VALUES ('".$id."','HRA Calculator','".$date."','".$time."')";
                    if ($conn->query($insert_timeline) === TRUE) {
                        //Data inserted successfully
                    }
                } else {
                    //create user
                    $query = "INSERT INTO `users`(`first_name`, `last_name`, `role`, `email`, `status`) VALUES ('Guest','User','5','".$_POST['email']."',1)";
                    if ($conn->query($query) === TRUE) {
                        //get id and Insert record in timeline
                        $query_email_check = "SELECT * FROM users WHERE email='".$_POST['email']."' AND role=4 OR role=5";
                        $result_email_check = $conn->query($query_email_check);
                        if ($result_email_check->num_rows > 0) {
                            //Get Id
                            $row_user = $result_email_check->fetch_assoc();
                            $id = $row_user['id'];
                            //Insert record in timeline
                            $date = date("d/m/Y");
                            $time = date("h:i A");
                            $insert_timeline = "INSERT INTO `user_timeline`(`user_id`, `browsed`, `date`, `time`) VALUES ('".$id."','HRA Calculator','".$date."','".$time."')";
                            if ($conn->query($insert_timeline) === TRUE) {
                                //Data inserted successfully
                            }
                        }
                    } else {
                        //Something went wrong
                        return 0;
                    }
                }
            }
        }
    }
}
?>