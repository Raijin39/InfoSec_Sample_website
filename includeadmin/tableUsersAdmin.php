<!-- tableUsers starts-->
<div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab" tabindex="0">  
            <div class="container-center content flex-fill m-0 pt-2 pb-5" id="table">
                <h3>Users</h3> 
                <div class="card dark-shadow overflow-x-scroll flex-fill mb-3" id="inner-content">
                    <table class="table table-striped my-0">
                        <thead>
                            <tr>
                                <th class="text-center">Username</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Password</th>
                                <th class="text-center">Phone Number</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $num = mysqli_num_rows($result);
                                if ($num>0) {
                                    while ($fetch=mysqli_fetch_assoc($result)) {
                                        echo "
                                        <tr>
                                            <td class='text-center align-middle mx-auto font-weight-bold'>".$fetch['username']."</td>
                                            <td class='text-center align-middle mx-auto'>".$fetch['email']."</td>
                                            <td class='text-center align-middle mx-auto'>".$fetch['password']."</td>
                                            <td class='text-center align-middle mx-auto'>".$fetch['phone']."</td>
                                            <td>
                                            <form method='post' action='delete.php'>
                                            <input type='hidden' name='id' value=" .$fetch['email']. ">
                                            <button type='submit' name='delete'>Delete</button>
                                        </form>
                                        
                                            </td>
                                        </tr>
                                        ";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<!-- tableUsers ends -->
    </div>
<!-- CONTENT ends -->
</div>