       <!-- sign in form -->
       <div class="signin" id="sign-in-info">
              <h1>Sign In</h1>
              <?php login_user(); ?>
              <form id="sign-in-form" method="POST">      
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password"/>
                <p class="forgot-password">Forgot your password?</p>
                <input type="submit" class="control-button in" value="Sign In" style = 'margin-left:76px; background-color:var(--left-color); color:#fff; border:none;'name= "login" />
              </form>
            </div>
        <!-- end sign in form -->