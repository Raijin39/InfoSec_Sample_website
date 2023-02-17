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

                                <script type="text/javascript"
                                    src="https://party-color-reservation-system.herokuapp.com/js/util/serialize-form-json.js"></script>
                                <script type="text/javascript"
                                    src="https://party-color-reservation-system.herokuapp.com/js/hooks/adminSearchHook.js"></script>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <h6>
            <span class="text-dark">Published</span> | <a
                href="https://party-color-reservation-system.herokuapp.com/admin/announcements?d=1&sd=0"
                class="text-primary">Draft</a> | <a
                href="https://party-color-reservation-system.herokuapp.com/admin/announcements?d=1&sd=1"
                class="text-primary">All</a> | <a
                href="https://party-color-reservation-system.herokuapp.com/admin/announcements?d=0&sd=1"
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
                                    <a href="https://party-color-reservation-system.herokuapp.com/admin/announcements/1?d=0&sd=0"
                                        class="dropdown-item"><i class="fas fa-eye mr-2"></i>View</a>
                                    <a href="https://party-color-reservation-system.herokuapp.com/admin/announcements/1/edit?d=0&sd=0"
                                        class="dropdown-item"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('https://party-color-reservation-system.herokuapp.com/admin/announcements/1/unpublish?d=0&amp;sd=0', undefined, 'Unpublish this announcement');"
                                        class="dropdown-item"><i class="fas fa-pencil-ruler mr-2"></i>Draft</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('https://party-color-reservation-system.herokuapp.com/admin/announcements/1/delete?d=0&amp;sd=0', undefined, 'Are you sure you want to delete this?');"
                                        class="dropdown-item"><i class="fas fa-trash mr-2"></i>Trash</a>
                                    <a onclick="confirmLeave('https://party-color-reservation-system.herokuapp.com/admin/announcements/1/perma-delete?d=0&amp;sd=0', undefined, 'Are you sure you want to permanently delete this?')"
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
                                    <a href="https://party-color-reservation-system.herokuapp.com/admin/announcements/1?d=0&sd=0"
                                        class="dropdown-item"><i class="fas fa-eye mr-2"></i>View</a>
                                    <a href="https://party-color-reservation-system.herokuapp.com/admin/announcements/1/edit?d=0&sd=0"
                                        class="dropdown-item"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('https://party-color-reservation-system.herokuapp.com/admin/announcements/1/unpublish?d=0&amp;sd=0', undefined, 'Unpublish this announcement');"
                                        class="dropdown-item"><i class="fas fa-pencil-ruler mr-2"></i>Draft</a>
                                    <a href="javascript:void(0);"
                                        onclick="confirmLeave('https://party-color-reservation-system.herokuapp.com/admin/announcements/1/delete?d=0&amp;sd=0', undefined, 'Are you sure you want to delete this?');"
                                        class="dropdown-item"><i class="fas fa-trash mr-2"></i>Trash</a>
                                    <a onclick="confirmLeave('https://party-color-reservation-system.herokuapp.com/admin/announcements/1/perma-delete?d=0&amp;sd=0', undefined, 'Are you sure you want to permanently delete this?')"
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