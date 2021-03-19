      
       <!-- sign in form -->
            <div class="signin" id="sign-in-info" style="width: 49%;margin: -5% 16%;">
            <?php doctor_admin_role(); ?>
              <h1  style="color: #00d0bd">Sign In</h1>
    
              <form id="sign-in-form" action="" method="POST">      
                <input type="text" placeholder="Username" name="username"/>
                <input type="password" placeholder="Password" name="password"/>
                <a class="forgot-password" style='color:black;text-decoration:none;margin-bottom:5px' href='https://docs.google.com/forms/d/e/1FAIpQLSej_qpphPhmBsPjxO3Z1Pgg_R73KG63gR4AFUgWEa4AoJFZFA/viewform?'>Forgot your password?</a>
                <input type="submit" class="control-button in" style='background-color: #00d0bd;margin: auto;cursor: pointer;display: block;margin-left: auto;margin-right: auto;width: 140px;height: 40px;font-size: 14px;text-transform: uppercase;border-radius: 20px;color: white;border:none;padding: 12px;' value="Sign In" name= "login_role" />
              </form>
            </div>
        <!-- end sign in form -->