<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" required="required" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
        <input class="form-control" type="email" name="email" class="form-control" placeholder="E-mail address" required="required">
        </div>
        <div class="form-group">
        <input class="form-control" type="number" name="mobile" class="form-control" placeholder="Mobile no" required="required">
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" required="required" type="password"/>
        </div>
        <div>
            <input class="form-control" name="confirmation" placeholder = "Confirm" required="required" type="password"/>
        </div><br/>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-flash"></span>
                Register
            </button>
            </div></br></br>

            or <a href="login.php">Log In</a> if you already have an account..!
        </div>
    </fieldset>
</form>


