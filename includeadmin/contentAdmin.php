<!-- NAV -->
<div class="d-flex align-items-start" id="contentNav">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
            type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
            type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Messages</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
            type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Feedback</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
            type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Post</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
            type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Users</button>
    </div>
    <!-- NAV -->

    <!-- CONTENT -->
    <!-- tableMessage -->
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="container-center content flex-fill m-0 pt-2 pb-5" id="table">
                <div class="container-md d-flex flex-column min-h-100">
                    <div class="row">
                        <div class="col-12 my-3">
                            <div class="row">

                                <div class="col-12 col-md-4 text-md-left">
                                    <h1>Messages</h1>
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
                    <span class="text-dark">Published</span> | <a href="#" class="text-primary">Draft</a> | <a href="#"
                        class="text-primary">All</a> | <a href="#" class="text-primary">Trashed</a>
                </h6>

                <div class="card dark-shadow overflow-x-scroll flex-fill mb-3" id="inner-content">
                    <table class="table table-striped my-0">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Message</th>
                                <th class="text-center">Date</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>

                        <tbody id="table-content">
                            <tr class="enlarge-on-hover">
                                <td class="text-center align-middle mx-auto font-weight-bold"><i
                                        class="text-success mr-2"></i>Name1</td>
                                <td class="text-center align-middle mx-auto">Email1</td>
                                <td class="text-center align-middle mx-auto">
                                    <button type="button" class="btn btn-primary" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="right"
                                        data-bs-content="qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjkl;zxcvbnmwedryuyhbijnolmkzrxdtcyh bj4se5drfybhnijfufegwuasbxcuweigoyhsuyxocweyGACUOUCHBCGUOBHCOEUCBWEYFG">
                                        View Message
                                    </button>
                                </td>
                                <td class="text-center align-middle mx-auto">Jan 10, 2023</td>

                                <td class="align-middle">
                                    <div class="dropdown ">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" id="dropdown1" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown1">
                                            <a href="#" class="dropdown-item"><i class="fas fa-eye mr-2"></i>View</a>
                                            <a href="#" class="dropdown-item"><i
                                                    class="fas fa-pencil-alt mr-2"></i>Edit</a>
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
                            </tr>

                            <tr class="enlarge-on-hover">
                                <td class="text-center align-middle mx-auto font-weight-bold"><i
                                        class="text-success mr-2"></i>Name2</td>
                                <td class="text-center align-middle mx-auto">Email2</td>
                                <td class="text-center align-middle mx-auto">
                                    <button type="button" class="btn btn-primary" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="right"
                                        data-bs-content="qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjkl;zxcvbnmwedryuyhbijnolmkzrxdtcyh bj4se5drfybhnijfufegwuasbxcuweigoyhsuyxocweyGACUOUCHBCGUOBHCOEUCBWEYFG">
                                        View Message
                                    </button>
                                </td>
                                <td class="text-center align-middle mx-auto">Jan 13, 2023</td>

                                <td class="align-middle">
                                    <div class="dropdown ">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" id="dropdown1" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown1">
                                            <a href="#" class="dropdown-item"><i class="fas fa-eye mr-2"></i>View</a>
                                            <a href="#" class="dropdown-item"><i
                                                    class="fas fa-pencil-alt mr-2"></i>Edit</a>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- tableMessage -->

<!-- tableFeedback -->
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div class="container-center content flex-fill m-0 pt-2 pb-5" id="table">
        <div class="container-md d-flex flex-column min-h-100">
            <div class="row">
                <div class="col-12 my-3">
                    <div class="row">

                        <div class="col-12 col-md-4 text-md-left">
                            <h1>Feedbacks</h1>
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
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Message</th>
                        <th class="text-center">Date</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>

                <tbody id="table-content">
                    <tr class="enlarge-on-hover">
                        <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>Name1</td>
                        <td class="text-center align-middle mx-auto">Email1</td>
                        <td class="text-center align-middle mx-auto">
                            <button type="button" class="btn btn-primary" data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="right"
                                data-bs-content="qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjkl;zxcvbnmwedryuyhbijnolmkzrxdtcyh bj4se5drfybhnijfufegwuasbxcuweigoyhsuyxocweyGACUOUCHBCGUOBHCOEUCBWEYFG">
                                View Message
                            </button>
                        </td>
                        <td class="text-center align-middle mx-auto">Jan 10, 2023</td>

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
                    </tr>

                    <tr class="enlarge-on-hover">
                        <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>Name2</td>
                        <td class="text-center align-middle mx-auto">Email2</td>
                        <td class="text-center align-middle mx-auto">
                            <button type="button" class="btn btn-primary" data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="right"
                                data-bs-content="qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjkl;zxcvbnmwedryuyhbijnolmkzrxdtcyh bj4se5drfybhnijfufegwuasbxcuweigoyhsuyxocweyGACUOUCHBCGUOBHCOEUCBWEYFG">
                                View Message
                            </button>
                        </td>
                        <td class="text-center align-middle mx-auto">Jan 13, 2023</td>

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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
<!-- tableFeedback -->

<!-- tablePosts -->
<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
<div class="container-center content flex-fill m-0 pt-2 pb-5" id="table">
        <div class="container-md d-flex flex-column min-h-100">
            <div class="row">
                <div class="col-12 my-3">
                    <div class="row">

                        <div class="col-12 col-md-4 text-md-left">
                            <h1>Posts</h1>
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
                        <th class="text-center">Title</th>
                        <th class="text-center">Content</th>
                        <th class="text-center">Published Date</th>
                        <th class="text-center">Publisher</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>

                <tbody id="table-content">
                    <tr class="enlarge-on-hover">
                        <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>My First Post</td>
                        <td class="text-center align-middle mx-auto">
                            <button type="button" class="btn btn-primary" data-bs-container="body"
                                data-bs-toggle="popover" data-bs-placement="right"
                                data-bs-content="qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjkl;zxcvbnmwedryuyhbijnolmkzrxdtcyh bj4se5drfybhnijfufegwuasbxcuweigoyhsuyxocweyGACUOUCHBCGUOBHCOEUCBWEYFG">
                                View Post
                            </button>
                        </td>
                        <td class="text-center align-middle mx-auto">Jan 13, 2023</td>
                        <td class="text-center align-middle mx-auto">アドミン アカウント</td>

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
                    </tr>

                    <tr class="enlarge-on-hover">
                        <td class="text-center align-middle mx-auto font-weight-bold"><i
                                class="text-success mr-2"></i>My Second Post</td>
                                <td class="text-center align-middle mx-auto">
                                    <button type="button" class="btn btn-primary" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="right"
                                        data-bs-content="qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjkl;zxcvbnmwedryuyhbijnolmkzrxdtcyh bj4se5drfybhnijfufegwuasbxcuweigoyhsuyxocweyGACUOUCHBCGUOBHCOEUCBWEYFG">
                                        View Post
                                    </button>
                                </td>
                        <td class="text-center align-middle mx-auto">Jan 13, 2023</td>
                        <td class="text-center align-middle mx-auto">Anon</td>

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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
<!-- tablePosts -->

<!-- tableUsers -->
<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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
                    </tr>
                </thead>
                    
                <tbody id="table-content">

                    <tr class="enlarge-on-hover">
                        <?php

                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <td class="text-center align-middle mx-auto font-weight-bold"><?php echo $row['username']; ?></td>
                            <td class="text-center align-middle mx-auto font-weight-bold"><?php echo $row['email']; ?></td>
                            <td class="text-center align-middle mx-auto"><?php echo $row['password']; ?></td>
                            <td class="text-center align-middle mx-auto"><?php echo $row['phone']; ?></td>
                        </tr>
                        <?php
                        }

                        ?>

                    <tr class="enlarge-on-hover">
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
</div>
<!-- tableUsers -->
</div>
</div>
<!-- CONTENT -->