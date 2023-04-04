<?php
$serverName = "184.168.194.75"; //serverName
$connectionInfo = array( "Database"=>"111Contactdetail", "UID"=>"wayto", "PWD"=>"@WSXzaq1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$result = array(); 
$CounselorIdVal=$_GET['CounselorId'];
$StatusidVal=$_GET['statusid'];
if( $conn ) {
  /* Set up and execute the query. */
  //echo "$CounselorIdVal";
  //echo "$StatusidVal";
  $tsql = "select nSrNo,cCandidateName,cCourse,cMobile,cEmail,cDataFrom from DataBaseList where AllocatedTo='$CounselorIdVal' and CurrentStatus='$StatusidVal' order by nSrNo";
  $stmt = sqlsrv_query( $conn, $tsql);
  if( $stmt === false)
  {
       echo "Error in query preparation/execution.\n";
       die( print_r( sqlsrv_errors(), true));
  }
$result["data"]=array();
  /* Retrieve each row as an associative array and display the results.*/
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
  {
      /*echo $row['cCounselorID'].", ".$row['cCounselorName'].", ".$row['UserName'].", ".$row['UserPassword'].", ".$row['UserRole'].", ".$row[' Status'].", ".$row[' cEmailAdd'].", ".$row[' cEmailPassword'].", ".$row[' cMobileNO'].", ".$row[' cProfilePhoto'].", ".$row[' dtCreatedDate']."\n";
        echo "<br>";*/
		//echo "ok";
	$cdata=array();
	$cdata['nSrNo']=$row['nSrNo'];
	$cdata['cCandidateName']=$row['cCandidateName'];
	$cdata['cCourse']=$row['cCourse'];
	$cdata['cMobile']=$row['cMobile'];
	$cdata['cEmail']=$row['cEmail'];
	$cdata['cDataFrom']=$row['cDataFrom'];
	
	array_push($result["data"], $cdata);
		//$result1=print_r($row);

  }
$result["success"] = 1;

echo json_encode($result);


  /* Free statement and connection resources. */
  sqlsrv_free_stmt( $stmt);
  sqlsrv_close( $conn);
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
