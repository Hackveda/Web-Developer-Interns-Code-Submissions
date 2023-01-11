<?php

$search_param = $_POST["search"];
$search_area = $_POST["area"];

   // Connect to database 
$host ="localhost";
$dbusername = "id20068481_appointment";
$dbpass = "Prinkv@12345";
$dbname = "id20068481_doctor";

$conn = new mysqli($host, $dbusername, $dbpass, $dbname);

$sql = "SELECT ID, DoctorName, DoctorInformation, DoctorImage from doctors where DoctorArea like '%".$search_area."%' and Doctorcategory like '%".$search_param."%'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    
    $data = '<div class="healthy-life-in-a-single-click">
          Doctors found in your area 
        </div>';
    $doctor_data = "";
    
    while($row = $result->fetch_assoc()){
        $doctorid = $row["ID"];
        $doctorname = $row["DoctorName"];
        $doctorinfo = $row["DoctorInformation"];
        $doctorimage = $row["DoctorImage"];
        
        $doctor_data = $doctor_data. '<div class="frame-parent">
          <div class="frame">
            <div class="rectangle"></div>
            <img class="rectangle-icon" alt="" src="'.$doctorimage.'" />
          </div>
          <b class="find-best-doctors">'.$doctorname.'</b>
          <div class="find-your-doctor-with-minimum">
            '.$doctorinfo.'
          </div>
          </div>'; 
    }
    
    
}else{
      $data = '<div class="healthy-life-in-a-single-click">
          No Doctors found in your area 
        </div>';
   
    
}

 $data = $data.$doctor_data;
 echo $data;

?>