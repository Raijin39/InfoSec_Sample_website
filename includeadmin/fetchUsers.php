<?php
    $num = mysqli_num_rows($resultUsers);
    if ($num>0) {
        while ($fetch=mysqli_fetch_assoc($resultUsers)) {
            echo "
            <tr>
                <td class='text-center align-middle mx-auto font-weight-bold'>".$fetch['full_name']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['email']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['password']."</td>
                <td >
                    <div class='gap-2 d-md-flex justify-content-center align-items-center'>
                        <button type='button' class='btn btn-primary'><a class='text-decoration-none text-white' href='editusers.php?editid=".$fetch['id']."'>Edit</a></button>
                        <form method='post' action='deletePost.php'>
                            <input type='hidden' name='id' value=" .$fetch['id']. ">
                            <button class='btn btn-outline-danger' type='submit' name='deletePost'>Delete</button> 
                        </form>
                    </div>
                </td>
            </tr>
            ";
        }
    }
    $resultUsers->data_seek(0);
?>