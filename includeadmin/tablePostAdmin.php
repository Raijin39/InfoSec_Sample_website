
<!-- tablePosts starts -->
<div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
            <div class="container-center content flex-fill m-0 pt-2 pb-5" id="table">
                <h3>Posts <a href="addContent.php" class="btn btn-primary float-end">Add Post</a></h3> 
                
                <div class="card dark-shadow overflow-x-scroll flex-fill mb-3" id="inner-content">
                    <table class="table table-striped my-0">
                        <thead>
                            <tr>
                                <th class="text-center col-2">Title</th>
                                <th class="text-center col-5">Content</th>
                                <th class="text-center col-2">Published Date</th>
                                <th class="text-center col-2">Publisher</th>
                                <th class="text-center col-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('includeadmin/fetchPosts.php');
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<!-- tablePosts ends -->