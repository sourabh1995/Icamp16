<?php 
    if (isset($_POST['action'])) {
        $name=htmlspecialchars($_POST['name']);
        $college=htmlspecialchars($_POST['college']);
        $study=htmlspecialchars($_POST['study']);
        $branch=htmlspecialchars($_POST['branch']);
        $year=htmlspecialchars($_POST['year']);
        $phone=htmlspecialchars($_POST['phone']);
        $mail=htmlspecialchars($_POST['mail']);
        $field=$_POST['field'];
        $fieldstr=implode(":", $field);
        $location=htmlspecialchars($_POST['location']);
        $duration=htmlspecialchars($_POST['duration']);
        $stip=htmlspecialchars($_POST['stip']);
        $info=htmlspecialchars($_POST['info']);

        function upload($target_dir,$name,$target_file){
          $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
             $target_file= $target_dir . $name . "-CV." . $imageFileType;
             if ($uploadOk == 0) {
                 $message.="Sorry, your file was not uploaded.<br>";
             } else {
                 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                     $message.="The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                 } else {
                     $message.="Sorry, there was an error uploading your file.";
                 }
             }
             return array($message,$target_file);
         }

         $target_dir = "studentCV/";
         $target_file = $target_dir . basename($_FILES["file"]["name"]);
         $message=upload($target_dir,$name,$target_file);
         $target_file=$message[1];
         $conn=new mysqli("localhost","minion","Imagine#2013","ecell");
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         $password = 'icamp@2016';
         $insert="insert into internapply values('',?,'','',?,'',?,?,?,?,?,?,?,?,?,?,?,?);";
	 if($stmt=$conn->prepare($insert)){
	 	$stmt->bind_param("ssssssssssssss",$name,$password,$college,$study,$branch,$year,$phone,$mail,$fieldstr,$location,$duration,$stip,$info,$target_file);
	 	$stmt->execute();
	 	$stmt->close();
	 }else{
	 	var_dump($conn->error);
	 }
	  require 'PHPMailer-master/PHPMailerAutoload.php';
      $email = new PHPMailer;
    //  $email->isSendmail();
      $email->setFrom('contact@ecell.org.in','KIIT Entrepreneurship Cell');   
      $email->addReplyTo('contact@ecell.org.in','KIIT Entrepreneurship Cell');
      $email->addAddress($mail,$name);
      $email->Subject = 'Confirmation of Student Registration in Internship Camp 2016';
      $email->Body = "Hello ".$name." \r\nGreetings from KIIT Entrepreneurship Cell.
      				\r\n You have successfully completed the registration process for Internship Camp 2016. \r\n To view and access your internship account please visit interncamp.ecell.org.in/dashboard/loginpage.php
              \r\n Complete the payment process to get the login ID and password for accessing the student dashboard, company details and internship opportunities. 
              \r\n Login Id: $mail
	            \r\n Password: icamp@2016
              \r\n You can pay online by logging in to your account.
	            \r\nIf you are facing issues regarding online payments you can pay offline. 
		          \r\n Offline payment counters: 
    		      \r\nVENUES:\r\n 1. MBA Reading Room
              \r\n 2. Campus 6 Auditorium
    		      \r\nTIMINGS: 4:30 pm to 6:30 pm
    		      \r\n If you are from KIIT University, you can also pay to our representatives from your hostel. Contact details for offline registration can be found here- https://drive.google.com/file/d/0B5JYhkusyGRSMTNzR1g2V3gzVDQ/view?usp=sharing
    		      \r\nFor your reference, we suggest you to retain the online-generated receipt (screenshot/ print) or the offline receipts with yourself after making the said payments, to avoid any confusion. 

              \r\nFor any further queries you can reach us on the following numbers:
              \r\n+91 77499 96089
              \r\n+91 70771 02465 

              \r\nKeep checking your mail for further updates. We look forward to your presence at the Internship Camp'16.
              \r\n For further queries related to application status contact: \n Subhadeep Sengupta \n Phone: 7749996089 \n Senior Executive, KIIT Entrepreneurship Cell. \r\n Good luck!" ;


      $email->addAttachment('brochure/INTERNSHIP_CAMP_2016_BROCHURE.pdf');
      $email->addAttachment('brochure/OFFLINE_DETAILS.pdf');
      if (!$email->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
      echo "Message sent!";
      }
     }
?>
<html>
	<head>
		<title>Form Submission Result</title>
	</head>
	<body>
		<h3>Your data was submitted successfully.If you do not receive the confirmation mail within 5 minutes kindly fill the form again.<strong> Please do not press any key till you are redirected to home page.</strong></h3>
		<h4>Please refer to the below messages to know your file upload status. If there are any errors, report to the ecell authorities</h4>
		<p><?php echo $message[0];?></p>
		<p id="timer"></p>
	</body>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script>
		var x=10;
		id = setInterval(function() {
		    x--;
		    if(x< 0) {
		        clearInterval(id);
		        window.location.assign("http://interncamp.ecell.org.in");
		    } else {
		        $('#timer').text("You will be redirected in " + x.toString() + " seconds.");
		    }
		}, 1000);
	</script>
</html>