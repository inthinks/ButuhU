<section>
            <div class="stepWrapper">
                <ul>
                    <li class="done">
                        <div class="stepImage">1</div>
                        <div class="stepInfo">Choose Your Loan</div>
                    </li>
                    <li class="done">
                        <div class="stepImage">2</div>
                        <div class="stepInfo">Your Data Detail</div>
                    </li>
                    <li  class="done">
                        <div class="stepImage">3</div>
                        <div class="stepInfo">Email Verification</div>
                    </li>
                    <li class="done">
                        <div class="stepImage">4</div>
                        <div class="stepInfo">Finish</div>
                    </li>
                </ul>
            </div>
            <div class="setupBox finished">
                <h3>Finish</h3>
                <img src="<?php echo base_url();?>templates/images/icon_finish.png">
                Your application will be process
                <em><font color="red"><?php echo $this->session->flashdata('alert');?></font></em>
                <span>Thank You</span>
            </div>
        </section>