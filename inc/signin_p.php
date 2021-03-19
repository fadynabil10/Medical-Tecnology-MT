       <!-- sign in form -->
       <div class="signin" id="sign-in-info">
              <h1>Sign In</h1>
              <?php login_user(); ?>
              <form id="sign-in-form" method="POST">      
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password"/>
                <a class="forgot-password" style='color:black;text-decoration:none;' href='https://docs.google.com/forms/d/e/1FAIpQLScDl_zQUZ3txcVpfNRkVp2OoNPzhLtXYT8TZA6Tc71-7fzohQ/viewform?'>Forgot your password?</a>
                <input type="submit" class="control-button in" value="Sign In" style = 'margin-left:76px; background-color:var(--left-color); color:#fff; border:none;'name= "login" />
              </form>
            </div>
        <!-- end sign in form -->