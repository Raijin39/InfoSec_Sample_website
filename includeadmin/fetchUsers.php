<?php
    $num = mysqli_num_rows($resultUsers);
    if ($num>0) {
        while ($fetch=mysqli_fetch_assoc($resultUsers)) {
            echo "
            <tr>
                <td class='text-center align-middle mx-auto font-weight-bold'>".$fetch['full_name']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['email']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['password']."</td>
                <td>
                <form method='post' action='deleteUsers.php'>
                    <input type='hidden' name='id' value=" .$fetch['id']. ">
                    <button type='button' class='btn btn-primary'><a class='text-decoration-none text-white' href='editusers.php?updateid=".$fetch['id']."'>Edit</a></button>

                    <button class='btn btn-danger' type='submit' name='deleteUsers'>Delete</button> 
                </form>
            
                </td>
            </tr>
            ";
        }
    }
    $resultUsers->data_seek(0);
?>