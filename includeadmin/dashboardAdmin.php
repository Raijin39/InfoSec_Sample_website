<!-- Dashboard Start -->
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="col-md-12 fw-bold fs-3">Dashboard</div>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0" style="width: 18rem;">
                    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-primary" id="tab2Button">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" style="width: 18rem;">
                    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="btn btn-primary" id="tab3Button">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
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
                                    $num = mysqli_num_rows($result);
                                    if ($num>0) {
                                        while ($fetch=mysqli_fetch_assoc($result)) {
                                            echo "
                                            <tr>
                                                <td class='align-middle mx-auto font-weight-bold'>".$fetch['full_name']."</td>
                                            </tr>
                                            ";
                                        }
                                    }
                                    $result->data_seek(0);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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