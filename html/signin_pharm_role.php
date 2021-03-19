       <!-- sign in form -->
       <div class="signin" id="sign-in-info">
        <?php login_pharmacian(); ?>
              <h1>Sign In</h1>
              <form id="sign-in-form" method="POST">      
                <input type="text" placeholder="Username" name="username" />
                <input type="password" placeholder="Password" name="password"/>
                <p class="forgot-password">Forgot your password?</p>
                <input type="submit" class="control-button in" value="Sign In" name= "login_pharm" />
              </form>
            </div>
        <!-- end sign in form -->