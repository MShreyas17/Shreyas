<?php
if (isset($_post['submit'])) {
    $newFileName= $_post['filename'];
    if(empty($newFileName)){
        $newFileName="gallery";
    }else{
        $newFileName= strtolower(str_replace(" ","-", $newFileName));
    }
    $imageTitle= $_POST['filetitle'];
    $imageTitle= $_post['filedesc'];
    
     $file = $_FILES['file'];
	 
	 $fileName = $_FILES['file']['name'];
	 $fileTmpname = $_FILES['file']['tmp_name'];
	 $fileSize = $_FILES['file']['size'];
	 $fileError = $_FILES['file']['error'];
	 $fileType = $_FILES['file']['type'];
	
	 $fileExt = explode(".", $fileName);
     $fileActualExt = strtolower(end($fileExt));

     $allowed = array('jpg', 'jpeg', 'png');
	 
	 if (in_array($fileActualExt, $allowed)) {
	     if($fileError ===0){
	        if($filesize < 1000000) {
			    $imageFullName = $newFileName .".". uniqid("",true) ."." . $fileActualExt;
				$fileDestination = "../img/gallery/".$fileNameNew;
                                include_once "dbh.php";
				
                                if(empty($imageTitle) || empty($imageTitle)){
                          
				header("Location: index.php?upload=empty");
                                exit();
                                }else{
                                    $sql = "SELECT*FROM gallary;";
                                    $stmt= mysqi_init($conn);
                                    if(!mysqli_stmt_prepare($stmt, $sql)){
                                        echo "SQL statement failed!";
                                    }else{
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);
                                       $rowCount = mysqli_num_rows($result);
                                       $setImageOrder = $rowCount + 1;
                                       
                                       $sql = "INSERT INTO gallary (titleGallery, descGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?, ?);";
                                       if(!mysqli_stmt_prepare($stmt, $sql)){
                                        echo "SQL statement failed!";
                                    }else {
                                        mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                                        mysqli_stmt_excute($stmt);
                                        
                                        move_uploaded_file($fileTmpname, $fileDestination);
                                        
                                        header("Location: index.php?upload=success");
                                    }
                                    }
                                }
			}else
			{
			 echo "Your file is too big!";
		    }
		 } else {
		     echo "There was an error uploading your file!";
	 }
         
	 }else{
             echo "You cannot uplod files of this type!";
             exit();
         }

}	

