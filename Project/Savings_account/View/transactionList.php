<?php
    $title = "Transaction List Page";
    //include('header.php');

    require('../model/db.php');
    $sql="select * from transaction";
    $conn = getConnection();
    $users_obj=mysqli_query($conn, $sql);


?>

    <a href="Home.php">Back</a> |
    <a href="../view/LogIn.html">logout</a>
    <br>

    <h1>Transaction list</h1>

    <?php 
        echo "<table border='1'>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Company Name</td>
            <td>Transaction Amount</td>
        </tr>";

while($row=mysqli_fetch_assoc($users_obj)){
    echo "
            <tr>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['company_name']}</td>
                <td>{$row['salary']}</td>

                
                </tr>
        ";

        //?id={$row['ID']}
}

    echo "</table>";

    $p=mysqli_fetch_assoc($users_obj);

    print_r($p);

?>
