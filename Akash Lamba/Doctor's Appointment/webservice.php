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
    while($row = $result->fetch_assoc()){
        $doctorid = $row["ID"];
        $doctorname = $row["DoctorName"];
        $doctorinfo = $row["DoctorInformation"];
        $doctorimage = $row["DoctorImage"];
        
        $doctor_data["DocName"] = $doctorname;
        $doctor_data["DocInfo"] = $doctorinfo;
        $doctor_data["DocImage"]= $doctorimage;
        
        $data[$doctorid] = $doctor_data;
    }
    
    $data["Result"] = "True";
    $data["Mesaage"] = "Doctors fetched succesfully ";
    
}else{
    
    $data["Result"] = "False";
    $data["Message"] = "No Doctors Found";
    
    
}
//sending response back to the request
echo json_encode($data);


?>