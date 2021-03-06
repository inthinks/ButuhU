 <header>
            <div class="headerBox">
                <h1><a href="<?php echo site_url('home')?>" id="logo">Butuh Uang</a></h1>
                <nav>
                    <ul>
                        <?php if($this->session->userdata('user_logged_in')==true){ ?><li><a href="<?php echo site_url('dashboard/loan_list')?>" class="<?php if($this->uri->segment(1)=='dashboard'){ echo 'selected';} ?>">Costumer Page</a></li>
                        <?php } else { ?><li><a href="<?php echo site_url('home')?>" class="<?php if($this->uri->segment(1)=='home'){ echo 'selected';} ?>">Home</a></li>
                        <?php } ?>
                        <li><a href="<?php echo site_url('aboutus')?>" class="<?php if($this->uri->segment(1)=='aboutus'){ echo 'selected';} ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('fees')?>" class="<?php if($this->uri->segment(1)=='fees'){ echo 'selected';} ?>">Fees and Charges</a></li>
                        <li><a href="<?php echo site_url('contactus')?>" class="<?php if($this->uri->segment(1)=='contactus'){ echo 'selected';} ?>">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="loginBox">
                    <ul>
                        <?php if($this->session->userdata('user_logged_in') == false){ ?>
                            <li><a href="<?php echo site_url('login')?>">Login</a></li>
                            <li><a href="<?php echo site_url('login')?>">Register</a></li>
                        <?php } else { ?>
                            <li>Hello, <?php echo $this->session->userdata('user_username');?></li> 
                            <li><a href="<?php echo site_url('home/logout')?>">logout</a></li>
                            <?php } ?> 
                    </ul>
                </div>
            </div>
            <div class="headerBox-mobile">
                <h1><a href="<?php echo site_url('home')?>" id="logo">Butuh Uang</a></h1>
                <div class="icon-box">
                    <a href="#"><div class="icon-man-blue"></div></a>
                    <a href="#" class="show-menu" onclick="show_popup_menu(); return false;"><div class="icon-menu"></div></a>
                </div>
            </div>
        </header>