
<?php
	define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "jansevadb");

    
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	// Make sure we connected successfully

	if(! $conn)
	{
    	die('Connection Failed'.$conn->connect_error);
	}
    else
    	//echo "Connection established";
	
	
	//All declarations
	$m = "";
	$scheme=array();
	$data = array();
	$amts = array();
	$scm = "";
	$rem_share_amount = 0;
	$rem_penalty_amount = 0;
	
	
	
	
	if(isset($_POST["mid"]))
				{
				
				$m = (int)$_POST["mid"];
				
				$sql = "SELECT lname,scheme_id FROM member_info where m_id=".$m;
				
				$result = $conn->query($sql);
	
					if($result->num_rows > 0)
					{
						//echo "rows found". "<br>";
						$row = " "; $i = 0;
						while($row = $result->fetch_assoc())
						{
							$name = $row["lname"];
							$scheme[$i] = (int)$row["scheme_id"];
							//echo "SCHEME ID IS:".$scheme;
							$i = $i + 1;
              			}
							$data['scheme'] = array($scheme);
							$data['name'] = array($name);
							echo json_encode($data);
							
              		}
				}

	if(isset($_POST["mid"]) && isset($_POST["scheme"]) && isset($_POST["id"]) )
	{
		$scm = (int)$_POST["scheme"];
		$m = (int)$_POST["mid"];
		
		$sql = "SELECT `rem_share_amount`,`rem_penalty_amount`,`amt_paid_sofar` FROM share where amt_paid_sofar = (select Max(amt_paid_sofar) from share where m_id=$m and scheme_ID = $scm )";
		$result = $conn->query($sql);
	
					if($result->num_rows > 0)
					{
						$row = " "; 
						while($row = $result->fetch_assoc())
							{
							$rem_share_amount = $row["rem_share_amount"];
							$rem_penalty_amount = $row["rem_penalty_amount"];
							
              				}
					
					}
					
					$data = ob_get_clean();
					$data=array(
					'send1'=>$rem_share_amount,
					'send2'=>$rem_penalty_amount
					);
					
							echo json_encode($data);
							
							//$atms[0] = $scm;
							//$atms[1] = $m;
							
	}
	/*
	if(isset($_POST["mid"])&& isset($_POST["ppenalty"]) && isset($_POST["pshare"])&& isset($_POST["rdate"]) && isset($_POST["share"]) && isset($_POST["recno"]) && isset($_POST["year"]) && isset($_POST["month"]) $$ isset(($_POST["tshare"]) && isset(($_POST["tpen"]))
	{
		*/
	if(isset($_POST["ppenalty"]) && isset($_POST["pshare"]))	
	{
		$mid = $_POST["mid"];
		$schm = $_POST["scheme"];
		$mnth = (int)$_POST["month"];
		$yr = $_POST["year"];
		$rno = $_POST["recno"];
		$shr_amt = $_POST["share"];
		$rdt = date_create($_POST["rdate"]);
		$rdt = date_format($rdt,"Y-m-d");
		$tot_shr = $_POST["tshare"];
		$tot_pen = $_POST["tpen"];
		$pshr = $_POST["pshare"];
		$ppen = $_POST["ppenalty"];
		//$amt_paid = $_POST["amt_paid"];
		$tot_shr = $tot_shr-$pshr;
		
		$dd = date('d', strtotime($rdt));

		if($dd > 10)
		{
			$dd = 1;
		}
		else
		{
			$dd = 0;
		}

		$month_diff = (date('Y', strtotime($rdt)) - $yr)*12 + (date('m', strtotime($rdt)) - $mnth) + $dd;

		$tot_shr = $tot_shr + $shr_amt * $month_diff;      //total share to be paid
		$tot_shr_aftpay = $tot_shr - $pshr;                // share amount to be paid after paying share amount

		$tot_pen = $tot_pen + (($month_diff * ($month_diff + 1))/2)*10; //total penalty to be paid
		$tot_pen_aftpay = $tot_pen - $ppen; 							// share amount to be paid after paying share amount

//		$amt_paid = $amt_paid + $shr_amt;

		//echo $tot_shr_aftpay,$tot_pen_aftpay;

		//$sql = "INSERT INTO share ( m_id, scheme_id, receipt_no, share_amount, date, rem_share_amount, rem_penalty_amount,amt_paid_sofar,month,penalty_amount) VALUES  ($mid, $schm, $rno, $shr_amt, $rdt, $tot_shr_aftpay,$tot_pen_aftpay,$amt_paid,$mnth,$ppen)";
		//$f = $conn->query($sql);
		$data = ob_get_clean();
		$data=array(
			'send1'=>$tot_shr_aftpay,
			'send2'=>$tot_pen_aftpay
					);
					
		echo json_encode($data);
		
	}
	
?>


<?php 
/*
	define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "jansevadb");

    
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	// Make sure we connected successfully

	if(! $conn)
	{
    	die('Connection Failed'.$conn->connect_error);
	}
    else
    	//echo "Connection established";




$mid = $_POST["mid"];
$schm = $_POST["scheme"];
$mnth = (int)$_POST["month"];
$yr = $_POST["year"];
$rno = $_POST["recno"];
$shr_amt = $_POST["share"];
$rdt = date_create($_POST["rdate"]);
$rdt = date_format($rdt,"Y-m-d");
$tot_shr = $_POST["tshare"];
$tot_pen = $_POST["tpen"];
$pshr = $_POST["pshare"];
$ppen = $_POST["ppenalty"];
$amt_paid = $_POST["amt_paid"];
$tot_shr = $tot_shr-$pshr;

$m = date('d', strtotime($rdt));
//echo "Month is:".$m;
if($m > 10)
{
	$m = 1;
}
else
{
	$m = 0;
}

$month_diff = (date('Y', strtotime($rdt)) - $yr)*12 + (date('m', strtotime($rdt)) - $mnth) + $m;

$tot_shr = $tot_shr + $shr_amt * $month_diff;      //total share to be paid
$tot_shr_aftpay = $tot_shr - $pshr;                // share amount to be paid after paying share amount

$tot_pen = $tot_pen + (($month_diff * ($month_diff + 1))/2)*10; //total penalty to be paid
$tot_pen_aftpay = $tot_pen - $ppen; 							// share amount to be paid after paying share amount

$amt_paid = $amt_paid + $shr_amt;


//echo "Month Difference is ".$month_diff." ";
//echo $mid." ".$schm." ".$mnth." ".$yr." ".$rno." ".$rdt." ".$tot_shr." ".$tot_pen." ".$pshr." ".$ppen;

echo $tot_shr_aftpay,$tot_pen_aftpay;

//$sql = "INSERT INTO share ( m_id, scheme_id, receipt_no, share_amount, date, rem_share_amount, rem_penalty_amount,amt_paid_sofar,month,penalty_amount) VALUES  ($mid, $schm, $rno, $shr_amt, $rdt, $tot_shr_aftpay,$tot_pen_aftpay,$amt_paid,$mnth,$ppen)";
//$f = $conn->query($sql);
*/
?>