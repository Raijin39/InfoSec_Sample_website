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
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('includeadmin/fetchUsers.php');
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