<?php
session_start();
include 'layout/header.php';
include 'vendor/fusioncharts/integrations/php/samples/includes/fusioncharts.php';
if (!isset($_SESSION['login'])) {
     echo " <script>
         document.location.href = 'login.php'
     </script>";
     exit;
}

$data_event = select('SELECT * FROM penyelenggara');

?>
<main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Penyelenggara</p>
                                    <h5 class="font-weight-bolder">
                                        <?php echo count($data_event) ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Grafik Penyelenggara</h6>
                    </div>
                    <div class="card-body p-3">
                            <?php
                                $hostdb = "localhost";  
                                $userdb = "root";  
                                $passdb = "";  
                                $namedb = "db_penyelenggara";
                                $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb); 
                                if ($dbhandle->connect_error) {
                                    exit("There was an error with your connection: ".$dbhandle->connect_error);
                                }
                                $strQuery = "SELECT *, COUNT(id_penyelenggara) AS jml_penyelenggara FROM penyelenggara GROUP BY(nama_penyelenggara) ORDER BY nama_penyelenggara ASC";
                                $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
                                if ($result) {
                                    $arrData = array(
                                        "chart" => array(
                                            "caption" => "Rata-Rata Jumlah Event Berdasarkan Penyelenggara",
                                            "showValues" => "0",
                                            "theme" => "fusion"
                                            )
                                        );
                                    $arrData["data"] = array();
                                    while($row = mysqli_fetch_array($result)) {
                                        array_push($arrData["data"], array(
                                            "label" => $row["nama_penyelenggara"],
                                            "value" => $row["jml_penyelenggara"]
                                            )
                                        );
                                    }
                                    $jsonEncodedData = json_encode($arrData);
                                    $columnChart = new FusionCharts("doughnut2d", "myFirstChart" , 700, 400, "chart-1", "json", $jsonEncodedData);
                                    $columnChart->render();
                                    $dbhandle->close();
                                }
                            ?>
                        <div class="col-lg-8 offset-lg-2">
                            <div id="chart-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [0, 0, 0, 1, 1, 4, 2],
                maxBarThickness: 6
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
</html>