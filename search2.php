
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `product1` WHERE CONCAT(`product_id`, `product_name`, `product_detail`, `product_brand`, `product_price`, `product_ram`, `product_storage`, `product_camera`, `product_image`, `product_battery`, `product_dimension`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `product1`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "testing1");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <script src="js/jquery-1.10.2.min.js"></script>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
          li {
    list-style-type: none;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 50px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 50%;
  position: fixed;
  left: 25%;
}

.pdetail{
    
    font-size: 16px;
    font-stretch: expanded;
    font-family: inherit;
    font-weight: 600;
    color: #524c4c;
}
.sear{
    height:36px;
    background-color:white;
    position: inherit;

}
        </style>
    </head>
    <body>
        
        <form action="frame.php" method="post">
        <div class="sear">  
        <div class="wrap" >
            <div class="search">
        <?php  
        $connect = mysqli_connect("localhost", "root", "", "testing1");       
        $query=mysqli_query($connect,"SELECT * FROM `product1`");
        
        echo "<input type=\"text\" name=\"valueToSearch\" placeholder=\"Value To Search\" list='dtlist' class=\"searchTerm\">";
        echo "<datalist id='dtlist'>";
        while($row=mysqli_fetch_array($query))
        {
            echo "<option>$row[product_name]</option>"; 
             
        } 
        echo"</datalist>";  
        echo "<button type=\"submit\" name=\"search\" value=\"Search\" class=\"searchButton\" >";
                        echo "<i class=\"fa fa-search\">";echo "</i>";
                    echo "</button>";    
                    
        mysqli_close($connect); 
        ?>
            </div>
        </div>
        </div>  

            <div align="center">
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
            
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:600px;">       
                <ul>
                    <img src="image/<?php echo $row['product_image'];?>" alt="" class="img-responsive"  >
                    <p align="center"><strong><b><a href="#"><?php echo $row['product_name']; ?></a></b></strong></p>
                    <p align="center"><strong><?php echo $row['product_detail']; ?></strong></p>
                    <h4 style="text-align:center;" class="text-danger"><?php echo $row['product_price'];?></h4>
                    <div class="pdetail">
                    <li>Brand :  &nbsp<?php echo $row['product_brand']; ?> </li>
                    <li>Dimension :  &nbsp<?php echo $row['product_dimension']; ?> </li>
                    <li>Camera : &nbsp<?php echo  $row['product_camera']; ?> MP</li>
                    <li>Ram : &nbsp<?php echo $row['product_ram']; ?> GB</li>
                    <li>Battery : &nbsp<?php echo $row['product_battery']; ?> mAH</li>
                    <li>Storage : &nbsp<?php echo $row['product_storage']; ?> GB</li>
                    
                    </div>
                </ul>  
                </div>  
                <?php endwhile;?>
            </div>
        </form>
        
    </body>
</html>
