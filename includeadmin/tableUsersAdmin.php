<div class="container-center content flex-fill m-0 pt-2 pb-5" id="table">
        <div class="container-md d-flex flex-column min-h-100">
            <div class="row">
                <div class="col-12 my-3">
                    <div class="row">

                        <div class="col-12 col-md-4 text-md-left">
                            <h1>Users</h1>
                        </div>


                        <div class="col-12 col-md-8">
                            <div class="row">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <h6>
            <span class="text-dark">Published</span> | <a
                href="#"
                class="text-primary">Draft</a> | <a
                href="#"
                class="text-primary">All</a> | <a
                href="#"
                class="text-primary">Trashed</a>
        </h6>

        <div class="card dark-shadow overflow-x-scroll flex-fill mb-3" id="inner-content">
            <table class="table table-striped my-0">
                <thead>
                    <tr>
                        <th class="text-center">Username</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center"></th>
                    </thead>
                </tr>
                    
                    <tbody id="table-content">
                       
                        <?php
                        include "db_conn.php";
                    $sql = "SELECT * FROM 'tblusers'";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr class="enlarge-on-hover">
                            <td class="text-center align-middle mx-auto font-weight-bold"><?php echo $row['username'] ?> </td>
                            <td class="text-center align-middle mx-auto font-weight-bold"><?php echo $row['email'] ?> </td>
                            <td class="text-center align-middle mx-auto"><?php echo $row['password'] ?> </td>
                            <td class="text-center align-middle mx-auto"><?php echo $row['phone'] ?> </td>
                            <td>
                                <a href="edit.php?id= <?php echo $row ['id']?>" class="link-dark"> <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id= <?php echo $row ['id']?>" class="link-dark"> <i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>

                    <!-- <tr class="enlarge-on-hover"> -->
                        <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>Name1</td>
                                <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>Email1</td>
                        <td class="text-center align-middle mx-auto">Pass1</td>
                        <td class="text-center align-middle mx-auto">Phone1</td>

                        <td class="align-middle">
                            <div class="dropdown ">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    id="dropdown1" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown1">
                                    <a href="#"
                                        class="dropdown-item"><i class="fas fa-eye mr-2"></i>View</a>
                                    <a href="#"
                                        class="dropdown-item"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('#', undefined, 'Unpublish this announcement');"
                                        class="dropdown-item"><i class="fas fa-pencil-ruler mr-2"></i>Draft</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('#', undefined, 'Are you sure you want to delete this?');"
                                        class="dropdown-item"><i class="fas fa-trash mr-2"></i>Trash</a>
                                    <a onclick="confirmLeave('#', undefined, 'Are you sure you want to permanently delete this?')"
                                        class="dropdown-item"><i class="fas fa-fire-alt mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </td>
                    <!-- </tr> -->

                    <!-- <tr class="enlarge-on-hover"> -->
                        <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>Name2</td>
                                <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>Email2</td>
                        <td class="text-center align-middle mx-auto">Pass2</td>
                        <td class="text-center align-middle mx-auto">Phone2</td>

                        <td class="align-middle">
                            <div class="dropdown ">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    id="dropdown1" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown1">
                                    <a href="#"
                                        class="dropdown-item"><i class="fas fa-eye mr-2"></i>View</a>
                                    <a href="#"
                                        class="dropdown-item"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('#', undefined, 'Unpublish this announcement');"
                                        class="dropdown-item"><i class="fas fa-pencil-ruler mr-2"></i>Draft</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('#', undefined, 'Are you sure you want to delete this?');"
                                        class="dropdown-item"><i class="fas fa-trash mr-2"></i>Trash</a>
                                    <a onclick="confirmLeave('#', undefined, 'Are you sure you want to permanently delete this?')"
                                        class="dropdown-item"><i class="fas fa-fire-alt mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </td>
                    <!-- </tr> -->
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>