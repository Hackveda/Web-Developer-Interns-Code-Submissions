<?php 

$search_param = $_POST["search"];
$search_area = $_POST["area"];
//connect to data base
if(isset($_POST["search"]) && isset($_POST["area"])){
    echo $search_param;
    echo $search_area;
$host="localhost";
$dbuser="id20068504_doctor";
$dbpass="Aniket@545454";
$dbname="id20068504_doctorinfo";

//make connection
$conn = new mysqli($host,$dbuser,$dbpass,$dbname);

$sql = "SELECT * FROM `doctors` WHERE DoctorArea LIKE '%".$search_area."%' and DoctorCategory LIKE '%".$search_param."%' " ;

$result = $conn->query($sql);

if($result -> num_rows > 0){
while($row = $result->fetch_assoc()){
    $doctorid = $row["ID"];
    $doctorname =$row["DoctorName"];
    $doctorinfo =$row["DoctorInformation"];
    $doctorimage= $row["DoctorImage"];
    $doctor_data["DocName"] = $doctorname;
    $doctor_data["DocInfo"] =   $doctorinfo;
    $doctor_data["DocImage"] =     $doctorimage;

    $data[$doctorid]=$doctor_data;
}
$data["Result"]="True";
$data["Massage"]="Fetched succesfully  ";
}else{
$data["Result"]="False";
$data["Massage"]="No Doctors Found";
}
}
else{
$data["Result"]="False";
$data["Massage"]="Bad Query";
}
echo json_encode($data, JSON_UNESCAPED_SLASHES);
?>