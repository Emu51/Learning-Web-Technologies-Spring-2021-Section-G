<?php 
        
        require_once('../Model/db.php');
        require_once('../Model/product.php');
        $conn = getConnection();
        $query="select * from products";
        $result= mysqli_query($conn,$query);
        echo "<h1> Product List </h1>";
        echo "<hr>";

        echo "<table border=2 width=700> <tr> <td> ID</td> <td> name </td> <td> buying price </td> <td> selling price </td>  <td> profit  </td> </tr> ";
        while ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr>
                    <td>{$data['id']} </td>
                    <td> {$data['name']} </td>
                    <td> {$data['buying price']} </td>
                    <td> {$data['selling price']} </td>
                    <td> {$data['profit']} </td>
                </tr>";
                
           echo "<br>";
        }
        echo "</table>";
?>