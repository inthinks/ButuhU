<script type="text/javascript">
  jQuery(document).ready(function(){
      jQuery("#formID, #lform" ).validationEngine();
    });
</script>
<section>
            <div class="loginRegisWrapper">
                <div class="signinBox">
                    <?php echo form_open('login/do_login','id="lform"');?>
                    <h3>Login</h3>
                    <ul>
                        <li>
                            <span>Username</span>
                            <input name="name" type="text" placeholder="your username" class="validate[required] text-input">
                        </li>
                        <li>
                            <span>Password</span>
                            <input name="pass" type="password" placeholder="your password"  class="validate[required] text-input">
                        </li>
                    </ul>
                    <div class="remindBox">
                        <label><input name="remember_me" value="0" onclick="$(this).val(this.checked ? 1 : 0)" type="checkbox"><span>Remind me?</span></label>
                        <a href="#">forgot your password?</a>
                    </div>
                    <b><font color="red"><?php echo $this->session->flashdata('notif'); ?></font></b>
                    <em><font color="red"><?php echo $this->session->flashdata('alert');?></font></em>
                    <input class="defBtn" type="submit" value="Login"/>
                    
                    <?php echo form_close();?>
                </div>
                <div class="signupBox">
                    <form method="post" action="<?php echo site_url('login/do_register')?>" id="formID" >
                    <h3>Not Member Yet?</h3>
                    <ul>
                        <li>
                            <span>Full Name</span>
                            <input name="fullname"  id="fullname" value="<?php echo ($this->session->userdata('personal_full_name') ? $this->session->userdata('personal_full_name'): '')  ?>" type="text" placeholder="your full name" class="txtField validate[required]"></li>
                        <li>
                            <span>Username</span>
                            <input name="username" value="<?php echo ($this->session->userdata('username') ? $this->session->userdata('username'): '')  ?>" type="text" placeholder="your username" class="validate[required] text-input">
                        </li>
                        <li>
                            <span>Password</span>
                            <input  name="password" type="password" placeholder="your password" class="validate[required] text-input">
                        </li>
                        <li>
                            <span>Confirm Password</span>
                            <input  name="confirm_password" type="password" placeholder="your password" class="validate[required] text-input">
                        </li>
                    </ul>
                    <em><font color="red"><?php echo $this->session->flashdata('back');?></font></em>
                    <input class="defBtn" type="submit" value="Register"/>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </section>