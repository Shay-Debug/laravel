<?php
session_start();

if (isset($_GET['id'])) {
    $_SESSION['P_id'] = $_GET['id'];
}
// --------database connection--------
include 'VengiConnect.php';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Project <?php echo $_SESSION['P_id'] ?></title>
    <style>
        /* ------------style one---------------- */
        body {
            background: #4043ed;
        }

        table.Project {
            font-family: Tahoma;
            background-color: #FFE75C;
            width: 100%;
            text-align: center;
            padding: 12px 12px;
            border-radius: 6px;
        }

        table.Project td {
            border: 2.5px dotted #FFC619;
            padding: 15px 16px;
            font-size: 17px;
            color: #606060;
            border-radius: 6px;
        }

        table.Project thead th {
            font-size: 19px;
            font-weight: bold;
            color: #ffb219;
            text-align: center;
            background: #ffeba2;

        }

        button {
            appearance: auto;
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: -internal-light-dark(black, white);
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
            box-sizing: border-box;
            margin: 0em;
            font: 400 13.3333px Arial;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
            border-image: initial;
        }

        /* .bu {
            background-color: #FF1493;
        } */

        /* -----||-----style one------||-------- */

        /* ------------style two---------------- */

        table.Project th {
            padding: 15px 16px;
        }

        #header-title {
            text-align: center;
            color: #FF8C19;
            margin-bottom: 45px;
            margin-top: 0;
        }

        h2 {
            font-size: 45px;
        }

        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
        }

        .sub-main_container {
            overflow: auto;
            padding-bottom: 50px;
        }

        .list-container {
            width: 100%;
            background: #292841;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.63), 0 -6px 20px rgba(0, 0, 0, 0.63);
            padding: 12px 12px;
            border-radius: 8px;
            overflow: auto;
        }

        /* -----||-----style two-----||--------- */
    </style>
</head>

<body>
    <!-- ------------Nav Menu----------- -->
    <?php include 'VengiNav.html' ?>
    <!-- ----||------Nav Menu----||----- -->

    <div class="main-container">
        <div class="sub-main_container">
            <!-- ------------Project's Task List----------------->
            <div id="header-title">
                <h2>Project <?php echo $_SESSION['P_id'] ?> Tasks</h2>
            </div>
            <div class="list-container">
                <table class="Project">
                    <thead>
                        <tr>
                            <th>Project_Id</th>
                            <th>Task_id</th>
                            <th>Task_Name</th>
                            <th>Status</th>
                            <th>Start_Date</th>
                            <th>End_Date</th>
                            <th>Created_date</th>
                            <th>Created_by</th>
                        </tr>
                    </thead>
                    <?php
                    // $connect = new mysqli('localhost','root','','') or die('Unable To Connect');
                    $userdb = $_SESSION['P_id'];
                    $sql = "SELECT * FROM task WHERE Project_Id = '$userdb';"; //insert project table here between 'From' and ';'
                    $query = mysqli_query($connect, $sql);
                    $querycheck = mysqli_num_rows($query);
                    if ($querycheck) {
                        while ($col = mysqli_fetch_assoc($query)) {
                            echo "<tbody>";
                            echo  "<tr>";
                            echo "<td> " . $col['Project_Id']  . "</td>";
                            echo "<td> " . $col['Task_id']  . "</td>";
                            echo "<td> " . $col['Task_Name'] . "</td> ";
                            echo "<td> " . $col['Status'] . "</td> ";
                            echo "<td> " . $col['Start_dt'] . "</td> ";
                            echo "<td> " . $col['End_dt']  . "</td> ";
                            echo "<td> " . $col['Created_dt'] . "</td> ";
                            echo "<td> " . $col['Created_by'] . "</td> ";
                            echo "</tr>";
                            echo "</tbody>";
                        }
                    }
                    ?>

                </table>
            </div>
            <!-- --------dashboard button------- -->
            <?php include 'VengiDBbtn.php' ?>
        </div>
    </div>
    <!--  ----------Footer------------- -->
    <?php include 'VengiFooter.html'  ?>
</body>
</html>