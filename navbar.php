
<!---NavBar For books crud--->
<nav class="navbar navbar-expand-lg bg-light blue">
    <div class="container-fluid"><a href="welcome.php"><img class="navbar-brand" height="55px;" width="130px;" src="book-publishing-process.jpeg" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a id="home" class="nav-link active" aria-current="page" href="welcome.php">Home</a> </li>
                <li class="nav-item"> <a id="createpost" class="nav-link" href="welcome.php?loadform=loadform" >Create New Post</a> </li>
                <li class="nav-item ml-auto"> <a id="signoutbtn" class="nav-link active" aria-current="page" href="signout.php">Sign Out</a> </li>
               
               <script>
               
               </script>
                <!-- Sign in Modal -->
                <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" action="insert.php">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" id="email" />
                                </div>
                                <div class="modal-body">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" id="password" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!---Sign Up Model--->
                <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post" action="insert.php">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                </div>
                                <div class="modal-body">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" id="name" />
                                </div>
                                <div class="modal-body">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="image" id="image" />
                                </div>
                                <div class="modal-body">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" id="email" />
                                </div>
                                <div class="modal-body">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" id="password" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!---Form--->
            </ul>
            <div class="dropdown ml-auto"><a class="btn dropdown-toggle" style="color:#007bff;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Join Us </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" style="cursor:pointer;" data-toggle="modal" data-target="#signin">Sign in</a> <a class="dropdown-item" style="cursor:pointer;" data-toggle="modal" data-target="#signup">Sign Up</a> </div>
            </div>
        </div>
    </div>
</nav>