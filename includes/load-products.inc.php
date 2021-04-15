<?php
    include('../dbcon/dbcon.php');

    $query = "SELECT * FROM products";
    $row = mysqli_query($conn, $query);

        if(mysqli_num_rows($row)>0){
            while($rows = mysqli_fetch_assoc($row)){
              echo "<tr>
              <td>
                  <p class='font-weight-bold'>".$rows['product_desc']."</p>
              </td>
              <td>
                  <img src='data:image/jpeg;base64,".base64_encode($rows['image_file'])."' alt='Adidas Stan Smith'>
              </td>
              <td>
                  <p>Price: <span id='price'>".$rows['product_price']."</span>Sar</p>
              </td>
              <td>
                  <button class='btn btn-primary'>Edit</button>
                  <button class='btn btn-danger'>Delete</button>
              </td>
              <td>
              </td>
          </tr>";
            }
        }else{
            echo "no data";
        }
?>