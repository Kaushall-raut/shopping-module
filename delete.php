<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <style>
      body {
        /* margin: 5rem; */
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      form {
        width: 48rem !important;
        /* display:f lex;
        flex-direction:column;
        justify-content:center;
        align-item:center; */
      }
    </style>
  </head>
  <body>
    <h2 style="text-align: center">Delete Item</h2>
    <form class="container border" action="<?php $_PHP_SELF ?>" method="get">
        
      <div class="mb-3">
        <label for="phid" class="form-label">Id</label>
        <input name="id" type="integer" class="form-control" id="phid" value="<?php echo $_REQUEST['id'] ?>"/>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">item_name</label>
        <input type="text" name="item" class="form-control" id="=name" value="<?php echo $_REQUEST['name'] ?>" />
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">stock</label>
        <input type="number" name="stock" class="form-control" id="stock" value="<?php echo $_REQUEST['stock'] ?>" />
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" name="price" class="form-control" id="price" value="<?php echo $_REQUEST['price'] ?>"/>
      </div>

      <button type="submit" name="sub" class="btn btn-primary">delete</button>
    </form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
  <?php  
$id=$_REQUEST['id'];
 $name=$_REQUEST['name'];
 $stock=$_REQUEST['stock'];
 $price=$_REQUEST['price'];


$conn=mysqli_connect("localhost","root","","shop");
if($conn){
    
    if(isset($_REQUEST['sub'])){

        $cmd="delete from `shopping` where `id`='$id' ";
        $res=mysqli_query($conn,$cmd);
        // echo $res;
        header("location:index.php");
    }


}

?>
</html>
