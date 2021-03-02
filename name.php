 <?php  
 $connect = mysqli_connect("localhost", "root", "", "dynamicinput");  
 $number = count($_POST["name"]);  
 $job = count($_POST["job"]);  
 $age = count($_POST["age"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $sql = "INSERT INTO testdynamic(name , age, job) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."
                ,".mysqli_real_escape_string($connect, $_POST["job"][$i]).",
                ".mysqli_real_escape_string($connect, $_POST["age"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
   