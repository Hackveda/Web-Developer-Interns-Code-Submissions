<?php
session_start();
$email=$_SESSION['email'];
    $Host= "hackveda.in";
    $User= "hackveda_yashchandra";
    $Password="Tz+aZwCrgjv,";
    $Dbname="hackveda_tmheart";
    $conn=mysqli_connect($Host,$User,$Password,$Dbname);
    if(!$conn){
        echo "connection failed",mysqli_connect_error();
    }
    $query="Select * from profile where Email='$email'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['ID'];
?>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <!-- Prism Syntax Highlighting-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/vendor/prismjs/plugins/toolbar/prism-toolbar.css">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/vendor/prismjs/themes/prism-okaidia.css">
    <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/css/style.default.4faf0c98.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/css/custom.0a822280.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/img/favicon.png">
    <link href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-zoom/2.0.0/chartjs-plugin-zoom.min.js"
    integrity="sha512-B6F98QATBNaDHSE7uANGo5h0mU6fhKCUD+SPAY7KZDxE8QgZw9rewDtNiu3mbbutYDWOKT3SPYD8qDBpG2QnEg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"
    integrity="sha512-UXumZrZNiOwnTcZSHLOfcTs0aos2MzBWHXOHOuB0J/R44QB0dwY5JgfbvljXcklVf65Gc4El6RjZ+lnwd2az2g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a class="navbar-brand fw-bold text-uppercase text-base" href="#"><span class="d-none d-brand-partial">Welcome </span><span class="d-none d-sm-inline"><?php echo $row['Name']; ?></span></a>
        <ul class="ms-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item dropdown ms-auto"><a class="nav-link pe-0" id="userInfo" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar p-1" src="img/appimg.png" alt="Jason Doe"></a>
          </li>
        </ul>
      </nav>
    </header>
      </div>
      <div class="page-holder bg-gray-100">
        <div class="container-fluid px-lg-4 px-xl-5">
              <!-- Page Header-->
              <div class="page-header">
                <h2 class="page-heading">Profile</h2>
              </div>
          <section class="mb-3 mb-lg-5">
            <div class="row mb-4">
                  <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-red"><?php echo $row['Age'],"Yrs";?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-red-light">
                        <div class="row align-items-center text-red">
                          <div class="col-10">
                            <p class="mb-0">AGE(in yrs)</p>
                          </div>
                          <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Widget Type 1-->
                  <!-- Widget Type 1-->
                  <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-blue"><?php echo $row['Height'],"cm";?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-blue-light">
                        <div class="row align-items-center text-blue">
                          <div class="col-10">
                            <p class="mb-0">Height</p>
                          </div>
                          <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Widget Type 1-->
                  <!-- Widget Type 1-->
                  <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h4 class="fw-normal text-primary"><?php echo $row['Weight'],"kgs";} ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer py-3 bg-primary-light">
                        <div class="row align-items-center text-primary">
                          <div class="col-10">
                            <p class="mb-0">Weight</p>
                          </div>
                          <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
            </div>
            <?php 
            $sql1 = "SELECT * FROM user_" . $id . "_hb WHERE ID=1" ;
            $result=mysqli_query($conn,$sql1);
            while($row=mysqli_fetch_assoc($result)){
              

            ?>
            <!-- heart beat-->
            
            <div>
            <h3 class="page-heading">My HeartRate</h3>
            </div><br>
            <div class="row mb-3">
    <div class="mb-3 col-sm-6 col-lg-3 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-red"><?php echo $row['HB'];?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-red-light">
          <div class="row align-items-center text-red">
            <div class="col-10">
              <p class="mb-0">Heart Beat</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Widget Type 1-->
    <!-- Widget Type 1-->
    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-blue"><?php echo $row['Status']; ?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-blue-light">
          <div class="row align-items-center text-blue">
            <div class="col-10">
              <p class="mb-0">STATUS</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-blue"><?php echo $row['MaxRate'];?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-blue-light">
          <div class="row align-items-center text-blue">
            <div class="col-10">
              <p class="mb-0">MAX Rate</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Widget Type 1-->
    <!-- Widget Type 1-->
    <div class="mb-4 col-sm-6 col-lg-3 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-primary"><?php echo $row['Goal'];} ?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-primary-light">
          <div class="row align-items-center text-primary">
            <div class="col-10">
              <p class="mb-0">GOAL</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Weight--><?php
          $sql1 = "SELECT * FROM user_" . $id . "_weight WHERE ID=1" ;
            $result=mysqli_query($conn,$sql1);
            while($row=mysqli_fetch_assoc($result)){
              

            ?>
            <div>
            <h3 class="page-heading">My Weight</h3>
            </div><br>
            <div class="row mb-3">
    <div class="mb-3 col-sm-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-red"><?php echo $row['Weight'];?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-red-light">
          <div class="row align-items-center text-red">
            <div class="col-10">
              <p class="mb-0">Weight</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Widget Type 1-->
    <!-- Widget Type 1-->
    <div class="mb-4 col-sm-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-blue"><?php echo $row['Status']; ?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-blue-light">
          <div class="row align-items-center text-blue">
            <div class="col-10">
              <p class="mb-0">STATUS</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-4 col-sm-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h4 class="fw-normal text-blue"><?php echo $row['Goal'];}?></h4>
            </div>
          </div>
        </div>
        <div class="card-footer py-3 bg-blue-light">
          <div class="row align-items-center text-blue">
            <div class="col-10">
              <p class="mb-0">Goal</p>
            </div>
            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Widget Type 1-->
    <!-- Widget Type 1-->
</div>  
<?php 
    
     $email=$_SESSION['email'];

    $sql = "SELECT ID FROM profile WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['ID'];
    
    $sql = "SELECT * FROM user_" . $user_id . "_hb";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $hb = array();
        $max_rate = array();
        $status = array();
        $goal = array();
        $date = array();
        $time = array();
    
        while($row = mysqli_fetch_assoc($result)) {
            $hb[] = $row["HB"];
            $max_rate[] = $row["MaxRate"];
            $status[] = $row["Status"];
            $goal[] = $row["Goal"];
            $date[] = $row["Date"];
            $time[] = $row["Time"];
        }
        $data = array(
            "HB" => $hb,
            "Time" => $time
        );
    
        
    } else {
        echo "No records found";
    }?>
    <div> 
      <h4>Analysis</h4>
    </div>
    <!-- /Widget Type 1-->
    <!-- Widget Type 1-->
    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">HeartRate vs Time</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
                            
</div>    
<script>
    var data=<?php echo json_encode($data);?>;
    const chartData = {
          labels: data["Time"],
          datasets: [
            {
              label: "Heart Rate",
              data: data["HB"],
              backgroundColor: "rgba(255, 99, 132, 0.2)",
              borderColor: "rgba(255, 99, 132, 1)",
              borderWidth: 1,
            },
          ],
        };
        const options = {
          pan: {
            enabled: true,
            mode: "x",
            modifierKey: "ctrl",
          },
          zoom: {
            wheel: {
              enabled: true,
            },
            drag: {
              enabled: true,
            },
            pinch: {
              enabled: true,
            },
            mode: "x",
          },
        };
        const ctx = document.getElementById("myChart").getContext("2d");
        const myChart = new Chart(ctx, {
          type: "line",
          data: chartData,
          options: {
            interaction: {
              intersect: false,
            },
            responsive: true,
            plugins: {
              legend: false,
              title: {
                display: true,
                text: "Heartbeat Rate vs Time",
              },
              zoom: options,
            },
          },
        });
  </script>   
            
          
              <!-- </Projects Widget>-->
              
              
            </div>
          </section>
        </div>
       
      </div>
    </div>
</body>
