<?php
    $num = mysqli_num_rows($resultPosts);
    if ($num>0) {
        while ($fetch=mysqli_fetch_assoc($resultPosts)) {
            echo "
            <tr>
                <td class='text-center align-middle mx-auto font-weight-bold'>".$fetch['title']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['content']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['publish_date']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['publisher']."</td>
                <td>
                    <div class='d-grid gap-2 d-md-flex justify-content-md-end'> 
                    <button type='button' class='btn btn-outline-primary'><a href='postedit.php?updateid=".$fetch['id']."'>Edit</a></button>
                    <button type='button' class='btn btn-outline-danger'>Delete</button>
                    </div>
                </td>
            </tr>
            ";
        }
    }
    $resultPosts->data_seek(0);
?>