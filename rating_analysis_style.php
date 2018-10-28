<?php header ("Content-type: text/css;");





include 'conn.php';
 $query="select r1,r2,r3,r4,r5 from agency where agency_id=1";
                     $result=mysqli_query($conn,$query);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            $r5=$obj->r5;
                            
                            
                        }
                     }

$tot=$r1+$r2+$r3+$r4+$r5;

$wid5=($r5*100)/$tot;
$wid4=($r4*100)/$tot;
$wid3=($r3*100)/$tot;
$wid2=($r2*100)/$tot;
$wid1=($r1*100)/$tot;


$five="#4CAF50";
$four="#2196F3";
$three="#00bcd4";
$two="#ff9800";
$one="#f44336";


$mar=0;
$pad=0;

?>

#b1
{

    width : <?php echo $wid5;?>%;
    background-color : <?php echo $five;?>;
    margin : <?php echo $mar;?>;
    padding : <?php echo $pad;?>;
     
}
#b2
{

    width : <?php echo $wid4;?>%;
    background-color : <?php echo $four;?>;
    margin : <?php echo $mar;?>px;
    padding : <?php echo $pad;?>px;
     
}
#b3
{

    width : <?php echo $wid3;?>%;
    background-color : <?php echo $three;?>;
    margin : <?php echo $mar;?>;
    padding : <?php echo $pad;?>;
     
}
#b4
{

    width : <?php echo $wid2;?>%;
    background-color : <?php echo $two;?>;
    margin : <?php echo $mar;?>;
    padding : <?php echo $pad;?>;
     
}
#b5
{

    width : <?php echo $wid1;?>%;
    background-color : <?php echo $one;?>;
    margin : <?php echo $mar;?>px;
    padding : <?php echo $pad;?>px;
     
}
span
{

        color : <?php echo $c;?>;
}