<?php 
    if (isset($_POST['action'])) {
        $name=htmlspecialchars($_POST['name']);
        $about=htmlspecialchars($_POST['about']);
        $link=htmlspecialchars($_POST['link']);
        $location=htmlspecialchars($_POST['location']);
        $poi=htmlspecialchars($_POST['poi']);
        $phone=htmlspecialchars($_POST['phone']);
        $mail=htmlspecialchars($_POST['mail']);
        $intern=htmlspecialchars($_POST['intern']);
        $field=$_POST['field'];
        $fieldstr=implode(":", $field);
        $stip=$_POST['stip'];
        $stipstr=implode(":", $stip);
        $duration=htmlspecialchars($_POST['duration']);
        $office=htmlspecialchars($_POST['office']);
        $acco=htmlspecialchars($_POST['acco']);
        $rep=htmlspecialchars($_POST['rep']);
        $confirm=htmlspecialchars($_POST['confirm']);
        $msg=htmlspecialchars($_POST['msg']);
        function upload($target_dir,$name,$target_file){
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $target_file= $target_dir . $name . "-logo." . $imageFileType;
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false) {
                $message.="File is an image - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                $message.="File is not an image.<br>";
                $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $message.="Sorry, only JPG, JPEG, PNG files are allowed.<br>";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                $message.="Sorry, your file was not uploaded.<br>";
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    $message.="The file ". basename( $_FILES["file"]["name"]). " has been uploaded.<br>";
                } else {
                   $message.="Sorry, there was an error uploading your file.<br>";
                }
            }
            return array($message,$target_file);
        }
	
        $target_dir = "img/companylogo/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $message=upload($target_dir,$name,$target_file);
        $target_file=$message[1];
        $conn=new mysqli("localhost","minion","Imagine#2013","ecell");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $insert="insert into intern values('',?,?,?,?,'',?,?,?,?,?,?,?,?,?,?,?,?,'','','','','','','','')";
    	if($stmt=$conn->prepare($insert)){
    		$stmt->bind_param("ssssssssssssssss",$name,$about,$link,$location,$poi,$phone,$mail,$intern,$fieldstr,$stipstr,$duration,$office,$acco,$rep,$msg,$target_file);
    		$stmt->execute();
    		$stmt->close();
    	}else{
    		var_dump($conn->error);
    	}
    	$from = "ecell.kiit@gmail.com"; 
        $to = $_POST['mail']; 
        $name = $_POST['name'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = "Hello " .$name. ",\r\nGreetings from KIIT Entrepreneurship Cell. 
        \n You have registered successfully for the Internship Camp 2016. Our executives will be getting back to shortly for further proceedings. \r\n Thank You for showing interest in our initiative. \r\n For further queries: \r\n Contact: Dhrubajyoti Chakraborty \r\n Email ID: dhrubajyotichak@gmail.com \r\n Phone Number: +91-8017870557 \r\n Regards 
        \r\n Nabanita Dhar \r\n Executive Director \r\n Internship Camp \r\n KIIT Entrepreneurship Cell" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); 
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        
       }
    
?>
<html>
	<head>
		<title>Form Submission Result</title>
	</head>
	<body>
		<h3>Your data was submitted successfully</h3>
		<h4>Please refer to the below messages to know your file upload status. If there are any errors, report to the ecell authorities</h4>
		<p id="timer"></p>
	</body>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script>
		var x=10;
		id = setInterval(function() {
		    x--;
		    if(x< 0) {
		        clearInterval(id);
		        window.location.assign("http://interncamp.ecell.org.in/");
		    } else {
		        $('#timer').text("You will redirected in " + x.toString() + " seconds.");
		    }
		}, 1000);
	</script>
<html>
	