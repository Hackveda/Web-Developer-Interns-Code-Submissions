<?php
if(isset($_POST['search'])){
    $search_param = $_POST['search'];
}else{
    $search_param = " ";
}
if(isset($_POST['area'])){
    $search_area = $_POST['area'];
}else{
    $search_area = " ";
}

//Connect to database
$host="localhost";
$dbname="id20063985_doctor"; 
$dbuser="id20063985_user";
$dbpass="Jaswanth@211";

$conn = new  mysqli($host,$dbuser,$dbpass,$dbname);

$sql="SELECT * FROM doctors WHERE Doctorarea LIKE '%".$search_area."%' and Doctorcategory LIKE '%".$search_param."%' ";

$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $data1='<div class="text-11">Doctors found in your area</div>';
        $doctordata="";
        $docid=$row["ID"];
        $docdata["docname"] = $row["Doctorname"];
        $docdata['docinfo']=$row["Doctorinfo"];
        $docdata["docarea"]=$row["Doctorarea"];
        $docdata["docimg"]=$row["Doctorimg"];
        $docdata["doccategory"]=$row["Doctorcategory"];

        $doctordata=$doctordata.'<div class="search-section">
            <div class="find-your-doctor-with-minimum">
              <p class="blank-line">'.$docdata["docinfo"].'</p>
              <p class="we-have-kept">
              '.$docdata["docarea"].'
              </p>
            </div>
            <div class="find-best-doctors">'.$docdata["docname"].'</div>
            <div class="search-icon">
                <img
                class="search-icon-child"
                alt=""
                src="'.$docdata["docimg"].'"
              />
            </div>
          </div>';

        $data[$docid]=$docdata;
        $data["result"]="true";
        $data["message"]="data feteched successfully";
        echo $data1;
        echo $doctordata;
    }
}else{
    echo '<div class="text-11">No Doctors found in your area</div>';
    $data["result"]="false";
    $data["message"]="No doctors found";

}

?>