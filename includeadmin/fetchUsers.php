<?php
    $num = mysqli_num_rows($result);
    if ($num>0) {
        while ($fetch=mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td class='text-center align-middle mx-auto font-weight-bold'>".$fetch['full_name']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['email']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['password']."</td>
                <td>
                <form method='post' action='delete.php'>
                <input type='hidden' name='id' value=" .$fetch['id']. ">
                <button class='btn btn-danger' type='submit' name='delete'>Delete</button> 
                </form>
            
                </td>
            </tr>
            ";
        }
    }
    $result->data_seek(0);
?>