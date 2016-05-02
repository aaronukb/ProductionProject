<div id="all">
     <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?action=home">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>
                        <p class="lead">Not our registered customer yet? Please, register.</p>
                         <hr>
                            <form id="register" action="index.php?action=controller" method="post" >
                            <div class="form-group">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name ="first_name">
                            </div>
                            <div class="form-group">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name ="last_name">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" id="email" name ="email">
                            </div>
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="address" name ="address">
                            </div>
                            <div class="form-group">
                                <label for="Contact">Contact</label>
                                <input type="text" class="form-control" id="contact" name ="contact">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="password" name ="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register" value="register" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>
                        <p class="lead">Already our customer? Please log in.</p>                       
                        <hr>
                            <form id="login" action="index.php?action=login_controller" method="post" >
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="first_name" class="form-control" id="first_name">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="text-center">
                                <button type="submit"class="btn btn-primary" name="login" value="login"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>      