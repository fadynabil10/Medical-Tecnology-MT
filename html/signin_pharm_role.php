
<div class="signin" id="sign-in-info" style="margin: 2% 31%; height:535px;  background: #c1baba00; border-radius:10px; border-radius: 4px;box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.18);">
          <?php login_pharmacian(); ?>
              <h1  style="color: rgb(29, 161, 242)">Sign In</h1>
    
              <form id="sign-in-form" method="POST">      
                <input type="text" placeholder="Username" name="username"/>
                <input type="password" placeholder="Password" name="password"/>
                <p class="forgot-password" data-toggle="modal" data-target="#forget" style='display:block;'>Forgot your password?</p>
                <input type="submit" class="control-button in" style='background-color: rgb(29, 161, 242);margin: auto;cursor: pointer;display: block;margin-left: auto;margin-right: auto;width: 140px;height: 40px;font-size: 14px;text-transform: uppercase;border-radius: 20px;color: white;border:none;padding: 12px;' value="Sign In" name= "login_pharm" />
              </form>
            </div>