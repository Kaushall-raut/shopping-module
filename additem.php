<?php  
$id=$_REQUEST['id'];
 $name=$_REQUEST['item'];
 $stock=$_REQUEST['stock'];
 $price=$_REQUEST['price'];


$conn=mysqli_connect("localhost","root","","shop");
if($conn){
    
    if(isset($_REQUEST['sub'])){

        $cmd="insert into `shopping` values('$id','$name','$stock','$price')";
        $res=mysqli_query($conn,$cmd);
        // echo $res;
        header("location:index.php");
    }


}

?>