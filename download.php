<?php
include "connect.php";
if(isset($_GET['filename']))
{
    $filename=$_GET['filename'].".xls";
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    $qry = "select id,name,age,gender,percentage from student";
    $result =mysqli_query($con,$qry);

    if(mysqli_num_rows($result)>0)
    {
        $heading=false;
        while($rows=mysqli_fetch_assoc($result))
        {
            if(!$heading)
            {
                echo implode("\t",array_keys($rows))."\r\n";
                $heading=true;
            }
            echo implode("\t",array_values($rows))."\r\n";
        }
    }
}

?>