<?php 

$search_param = $_POST["search"];
$search_area = $_POST["area"];
//connect to data base
if(isset($_POST["search"]) && isset($_POST["area"])){
    echo $search_param;
    echo $search_area;
$host="localhost";
$dbuser="id20081464_dr";
$dbpass="Raju@12341234";
$dbname="id20081464_drinfo";

//make connection
$conn = new mysqli($host,$dbuser,$dbpass,$dbname);

$sql = "SELECT * FROM `doctors` WHERE DoctorArea LIKE '%".$search_area."%' and DoctorCategory LIKE '%".$search_param."%' " ;

$result = $conn->query($sql);

if($result -> num_rows > 0){
    $data = '<div class="lbl-title-section3-WYJxxj">Doctor Found</div>' ;
    $doctor_data= " " ;
while($row = $result->fetch_assoc()){
    $doctorid = $row["ID"];
    $doctorname =$row["DoctorName"];
    $doctorinfo =$row["DoctorInformation"];
    $doctorimage= $row["DoctorImage"];
   
   $doctor_data = $doctor_data.'<div class="search-section-WYJxxj smart-layers-pointers">
            <div class="search-box-vYzqLm">
              <div class="search-bg-gDPMPr"></div>
              <img class="search-icon-gDPMPr" src="'.$doctorimage.'" />
            </div>
            <div class="title-search-doctor-vYzqLm roboto-bold-black-36px">'.$doctorname.'</div>
            <div class="desc-seacrh-doctor-vYzqLm roboto-normal-black-24px">
             '. $doctorinfo.'
            </div>
          </div>' ;
}

}else{

$data = '<div class="lbl-title-section3-WYJxxj"> No Doctor Found</div>' ;
}
}
else{
    $data = '<div class="lbl-title-section3-WYJxxj">Bad Query </div>' ;
}
echo $data.$doctor_data ;

?>
