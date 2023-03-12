<?php
    $num = mysqli_num_rows($resultPosts);
    if ($num>0) {
        while ($fetch=mysqli_fetch_assoc($resultPosts)) {
            echo "
                <!--card -->
                <div class='row d-flex justify-content-center'>
                    <div class='col-lg-6 mb-3 ' style='width: 50rem;'>
                        <div class='card border-primary mb-3 text-center'>
                            <div class='card-header'>
                                <h3 class='card-title text-primary'>".$fetch['title']."</h3>
                            </div>
                            <div class='card-body '>
                                <p class='card-text'>".$fetch['content']."</p>
                            </div>
                            <div class='card-footer text-muted'>Published date: ".$fetch['publish_date']."</div>
                        </div>
                    </div>

                </div>
                <!--card -->
            ";
        }
    }
    $resultPosts->data_seek(0);
?>