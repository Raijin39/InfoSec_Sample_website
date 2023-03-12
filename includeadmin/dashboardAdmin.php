<!-- Dashboard Start -->
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="col-md-12 fw-bold fs-3">Dashboard</div>
            <!-- Cards of post and users Start-->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 mb-3 mb-sm-0" style="width: 35rem;">
                    <div class="card text-bg-primary mb-3" style="width: 30rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">Post Mannagement</h5>
                            <p class="card-text">Take control of your content: Streamline your workflow and optimize your productivity with our user-friendly dashboard for seamless post management.</p>
                            <a class="btn btn-primary" id="tab2Button">Go to Post</a> <!-- link to post management -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="width: 35rem;">
                    <div class="card text-bg-primary mb-3" style="width: 30rem; height: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title">User Mannagement</h5>
                            <p class="card-text">Complete control over user details: Our user management tools empower admins to easily update user names and email addresses, ensuring accurate and up-to-date user information.</p>
                            <a class="btn btn-primary" id="tab3Button">Go to Users</a> <!-- link to user management -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cards of post and users End-->
            <!-- user name table Start-->
            <div class="row"> 
                <div class="row my-5">
                    <h3 class="fs-2 mb-3"> Users </h3>
                    <div class ="col card dark-shadow overflow-x-scroll flex-fill mb-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $num = mysqli_num_rows($resultUsers);
                                    if ($num>0) {
                                        while ($fetch=mysqli_fetch_assoc($resultUsers)) {
                                            echo "
                                            <tr>
                                                <td class='align-middle mx-auto font-weight-bold'>".$fetch['full_name']."</td>
                                            </tr>
                                            ";
                                        }
                                    }
                                    $resultUsers->data_seek(0);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- user name table End-->
        </div>
        <script>
        $("#tab2Button").click(function() {
            $('#v-pills-tab li:eq(1) button').tab('show');
        })
        </script>
        <script>
            $("#tab3Button").click(function() {
            $('#v-pills-tab li:eq(2) button').tab('show');
        })
        </script>
<!-- Dashboard End -->