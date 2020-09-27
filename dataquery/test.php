<div id="container"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div id="container_two"></div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dashboardg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT DISTINCT(InstallTeam) FROM crecord";
$result = mysqli_query($conn, $sql);

$totalinstallteam = 0;
$array_teaminstall = array();
$array_installtype = array();

if (mysqli_num_rows($result) > 0) {
  
  $installType_array = array();
  while($row = mysqli_fetch_assoc($result)) {
    extract($row);
    $totalinstallteam++;
    // $InstallTeam."<br />";
    array_push($array_teaminstall, $InstallTeam);

    $sql_s = "SELECT COUNT(installType) AS total FROM crecord WHERE InstallTeam = '$InstallTeam'";
    $result_s = mysqli_query($conn, $sql_s);
    if (mysqli_num_rows($result_s) > 0) {
      $row_s = mysqli_fetch_assoc($result_s);
        // echo $row['total'];
        $newtotal = intval($row_s['total']);
        $array_team[] = array("name"=>$InstallTeam, "y"=>$newtotal, "drilldown"=>$InstallTeam);
        $array_second[] = array("name"=>$InstallTeam, "id"=>$InstallTeam);
        // array_push($array_installtype, $row['installType']);
    }
  }
  $json_product =  json_encode($array_team);

  // print_r($json_product);

  for ($i=0; $i<sizeof($array_teaminstall); $i++){

    $sql_s = "SELECT DISTINCT(installType) FROM crecord WHERE InstallTeam = '$array_teaminstall[$i]'";
    $result_s = mysqli_query($conn, $sql_s);
    if (mysqli_num_rows($result_s) > 0) {
      while($row_s = mysqli_fetch_assoc($result_s)) {
      
        $installtype = $row_s['installType'];
        $sql_b = "SELECT COUNT(installType) as COUNTBARU FROM crecord WHERE InstallTeam = '$array_teaminstall[$i]' AND installType = '$installtype'";
        $result_b = mysqli_query($conn, $sql_b);
        $row_b = mysqli_fetch_assoc($result_b);

        $rowbaru = $row_b['COUNTBARU'];
        // $installteamnew = $array_teaminstall[$i];
        // $abcd[] = array("name"=>$installteamnew, "id"=>$installteamnew);
        $finaldata[] = "['$array_teaminstall[$i]',$rowbaru]";

        // echo $array_teaminstall[$i] ."=>". $row_s['installType'];
        // echo "<br />";
        // $array_install_type[] = array();

      }



    }

    $abcd =  json_encode(array_values( array_unique( $array_second, SORT_REGULAR ) ));
    // print_r($finaldata);
    var_dump($abcd);


  }



  ?>
  <script>
  Highcharts.chart('container_two', {
        chart: {
            type: 'column',
            backgroundColor: 'transparent',
        },
        title: {
            text: 'Team Installation',
            style: {
              color: 'white',
              fontWeight: 'bold',
              fontSize: '12px',
              fontFamily: 'Trebuchet MS, Verdana, sans-serif'
            }
        },
        subtitle: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Install Team'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
        },

        series: [
            {
                name: "Install Team",
                colorByPoint: true,
                data: <?php echo $json_product; ?>
            }
        ],
        drilldown: {
            series: [
                {
                    name: "UTRET Solution",
                    id: "UTRET Solution",
                    data: [
                        [
                            "v65.0",
                            0.1
                        ],
                        [
                            "v64.0",
                            1.3
                        ],
                        [
                            "v63.0",
                            53.02
                        ],
                        [
                            "v62.0",
                            1.4
                        ],
                        [
                            "v61.0",
                            0.88
                        ],
                        [
                            "v60.0",
                            0.56
                        ],
                        [
                            "v59.0",
                            0.45
                        ],
                        [
                            "v58.0",
                            0.49
                        ],
                        [
                            "v57.0",
                            0.32
                        ],
                        [
                            "v56.0",
                            0.29
                        ],
                        [
                            "v55.0",
                            0.79
                        ],
                        [
                            "v54.0",
                            0.18
                        ],
                        [
                            "v51.0",
                            0.13
                        ],
                        [
                            "v49.0",
                            2.16
                        ],
                        [
                            "v48.0",
                            0.13
                        ],
                        [
                            "v47.0",
                            0.11
                        ],
                        [
                            "v43.0",
                            0.17
                        ],
                        [
                            "v29.0",
                            0.26
                        ]
                    ]
                },
                {
                    name: "Firefox",
                    id: "Firefox",
                    data: [
                        [
                            "v58.0",
                            1.02
                        ],
                        [
                            "v57.0",
                            7.36
                        ],
                        [
                            "v56.0",
                            0.35
                        ],
                        [
                            "v55.0",
                            0.11
                        ],
                        [
                            "v54.0",
                            0.1
                        ],
                        [
                            "v52.0",
                            0.95
                        ],
                        [
                            "v51.0",
                            0.15
                        ],
                        [
                            "v50.0",
                            0.1
                        ],
                        [
                            "v48.0",
                            0.31
                        ],
                        [
                            "v47.0",
                            0.12
                        ]
                    ]
                },
                {
                    name: "Internet Explorer",
                    id: "Internet Explorer",
                    data: [
                        [
                            "v11.0",
                            6.2
                        ],
                        [
                            "v10.0",
                            0.29
                        ],
                        [
                            "v9.0",
                            0.27
                        ],
                        [
                            "v8.0",
                            0.47
                        ]
                    ]
                },
                {
                    name: "Safari",
                    id: "Safari",
                    data: [
                        [
                            "v11.0",
                            3.39
                        ],
                        [
                            "v10.1",
                            0.96
                        ],
                        [
                            "v10.0",
                            0.36
                        ],
                        [
                            "v9.1",
                            0.54
                        ],
                        [
                            "v9.0",
                            0.13
                        ],
                        [
                            "v5.1",
                            0.2
                        ]
                    ]
                },
                {
                    name: "Edge",
                    id: "Edge",
                    data: [
                        [
                            "v16",
                            2.6
                        ],
                        [
                            "v15",
                            0.92
                        ],
                        [
                            "v14",
                            0.4
                        ],
                        [
                            "v13",
                            0.1
                        ]
                    ]
                },
                {
                    name: "Opera",
                    id: "Opera",
                    data: [
                        [
                            "v50.0",
                            0.96
                        ],
                        [
                            "v49.0",
                            0.82
                        ],
                        [
                            "v12.1",
                            0.14
                        ]
                    ]
                }
            ]
        }
    });

    </script>
  <?php


} else {
  echo "0 results";
}

mysqli_close($conn);

?>