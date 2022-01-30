<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$sname = $sid = $scg = $sdeptid = $mname = $email = $sch = $mincome = $fincome = $perc = $fee = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $sname = $row["Studentname"];
        $sid = $row["Studentid"];
        $scg = $row["Studentcg"];
        $sdeptid = $row["Studentdeptid"];
        $mname = $row["Mothername"];
        $email = $row["Email"];
        $sch = $row["Sch_flag"];
        $mincome = $row["Motherincome"];
        $fincome = $row["Fatherincome"];
        $cgcat = $row["cg_cat"];
        $batch = $row["Sbatch"];
    }
}



?>
<?php
$sql = "SELECT tution_fee FROM feestructure WHERE batch='$batch'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fee = $row["tution_fee"];
    }
}


?>
<div class="container">
    <center>
        <?php
        $sum = $mincome + $fincome;
        if ($sch == 1) {
            //echo ("You have applied for merit<br>");
            $schname = "Merit";
            $sql = "SELECT merit_perc FROM meritcutoff WHERE merit_cg_cat='$cgcat'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $perc = $row["merit_perc"];
                }
                //echo("Fee is $fee <br>Scholarship is $perc<br>");
            }
        } else {
            //echo "You have applied for MCN<br>";
            $schname = "MCN";
            if ($sum < 1200001) {
                $sql = "SELECT perc FROM mcncutoff WHERE cg_cat='$cgcat'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $perc = $row["perc"];
                    }

                    //echo("Fee is $fee <br>Scholarship is $perc<br>");
                }
            } else {
                //echo("You are not eligible for MCN<br>");
                $sch = 1;
                if ($cgcat == 1 || $cgcat == 2) {
                    //echo ("You have applied for merit<br>");
                    $schname = "Merit";
                    $sql = "SELECT merit_perc FROM meritcutoff WHERE merit_cg_cat='$cgcat'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $perc = $row["merit_perc"];
                        }
                        //echo("Fee is $fee <br>Scholarship is $perc<br>");
                    }
                } else if ($cgcat >= 3) {
                    $schname = "None";
                    $sql = "SELECT merit_perc FROM meritcutoff WHERE merit_cg_cat='$cgcat'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $perc = $row["merit_perc"];
                        }
                        //echo("Fee is $fee <br>Scholarship is $perc<br>");
                    }
                }
            }
        }
        $finalfee = $fee - ($fee * $perc / 100);
        //echo("Your fee is $finalfee");
        ?>
        <div id="account">
            <div class="col-lg-6 col-sm-6">
                <div class="card hovercard">
                    <div class="card-background">
                        <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                        <!-- http://lorempixel.com/850/280/people/9/ -->
                    </div>
                    <div class="useravatar">
                        <img alt="" src="img/bitslogo.svg">
                    </div>
                    <div class="card-info"> <span class="card-title"><?php echo $sname; ?></span>

                    </div>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <div class="hidden-xs">Your Fee details</div>
                        </button>
                    </div>

                </div>

                <div class="well">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <table class="table">
                                <tr>
                                    <td>Tuition fee</td>
                                    <td><?php echo $fee; ?></td>
                                </tr>
                                <tr>
                                    <td>Scholarship name</td>
                                    <td><?php echo $schname; ?></td>
                                </tr>
                                <tr>
                                    <td>Scholarship offered</td>
                                    <td><?php echo $perc . '%'; ?></td>
                                </tr>
                                <tr>
                                    <td>Final Fee</td>
                                    <td><?php echo $finalfee; ?></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>

</div>