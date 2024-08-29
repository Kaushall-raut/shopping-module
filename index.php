<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopKaro</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      body{
        height:100vh;
      }
      #add{
        display:flex;
        justify-content:flex-end;
        margin:2rem;
      }
      table{
        margin:3rem;
        /* padding: 0rem 0rem !important; */
      }#btn{
        margin-top:3rem;
      }
    </style>
  </head>
  <body>
    <nav class="admin-navbar">
      <div class="navbar-brand">
        <a href="#">Admin Panel</a>
      </div>
      <ul class="navbar-links">
        <li><a href="#dashboard">Dashboard</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#orders">Orders</a></li>
        <li><a href="#users">Users</a></li>
        <li><a href="#logout" class="logout">Logout</a></li>
      </ul>
    </nav>
    <div id="btn">
      <a href="add.html" id="add">
        <button type="submit" class="btn btn-primary">Add product</button>
      </a>
    </div>
    <table class="table container" border>
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Item Name</th>
          <th scope="col">stock</th>
          <th >Price per item</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php 
    $conn=mysqli_connect("localhost","root","","shop");
    
    
    if($conn){
    
      $cmd="select * from `shopping`";
    
      $query=mysqli_query($conn,$cmd);
      while($result=mysqli_fetch_array($query)){
        // echo $result['company'];
    ?>
        <tr>
          <td><?php echo $result['id'] ?></td>
          <td><?php echo $result['item_name'] ?></td>
          <td><?php echo $result['stock'] ?></td>
          <td><?php echo $result['price'] ?></td>
          <td> <a href="update.php?id=<?php echo $result['id']?> & name=<?php echo $result['item_name'] ?>&stock=<?php echo $result['stock'] ?>&price=<?php echo $result['price'] ?>">
        <button type="submit" class="btn btn-success">update</button> </a></td>
          <td> <a href="delete.php?id=<?php echo $result['id']?> & name=<?php echo $result['item_name'] ?>&stock=<?php echo $result['stock'] ?>&price=<?php echo $result['price'] ?>"><button type="submit" class="btn btn-danger">delete</button></a></td>
     
          <!-- <td><a href=.php"><button type="button" class="btn btn-success">buy</button></a></td> -->
        </tr>
      </tbody>
      <?php 
    }
      }
      ?>
    </table>
  </body>
</html>
