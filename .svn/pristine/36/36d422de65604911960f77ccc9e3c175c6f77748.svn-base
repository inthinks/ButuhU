<section>
            <div class="stepWrapper">
                <ul>
                    <li class="done">
                        <div class="stepImage">1</div>
                        <div class="stepInfo">Choose Your Loan</div>
                    </li>
                    <li class="selected">
                        <div class="stepImage">2</div>
                        <div class="stepInfo">Your Data Detail</div>
                    </li>
                    <li>
                        <div class="stepImage">3</div>
                        <div class="stepInfo">Email Verification</div>
                    </li>
                    <li>
                        <div class="stepImage">4</div>
                        <div class="stepInfo">Finish</div>
                    </li>
                </ul>
            </div>
            <div class="setupBox">
                <h3>Your Data Detail</h3>
                <div class="dataDetailBox">
                    <div class="dataDetailLeft">
                        Data Pinjaman
                    </div>
                    <div class="dataDetailRight">
                        <div class="ddrTop">
                            <ul>
                                <li>Loan Amount</li>
                                <li>Interest / Fee</li>
                                <li>Total Repayable</li>
                                <li>Due Date</li>
                            </ul>
                        </div>
                        <div class="ddrBottom">
                            <ul>
                                <li id="s_amount">Rp 8.000.000,-</li>
                                <li id="s_fee">Rp 460.000,-</li>
                                <li id="s_total">Rp 8.460.000,-</li>
                                <li id="s_due">31 Sept 2016</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="formWrapper">
                    <ul>
                        <li><a href="#personal_detail">Personal Detail</a></li>
                        <li><a href="#contact_detail">Contact Detail</a></li>
                        <li><a href="#bank_detail">Bank Detail</a></li>
                        <li><a href="#other_detail">Other Detail</a></li>
                        <li><a href="#agreement" class="selected">Agreement</a></li>
                    </ul>
                    <div class="formBox">
                        <div class="agreementWrapper">
                        <?php echo form_open('step_loan/do_step_6')?>
                            <div class="agreementBox jscroll-pane">
                                <div class="agreement">
                                <table width="100%" border="1">
                                    <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Religion</th>
                                        <th>Race</th>
                                        <th>Education</th>
                                    </tr>
                                    </thead>  

                                    <tbody>
                                    <tr>
                                        <td><?php echo $this->session->userdata('personal_full_name');?></td>
                                        <td><?php echo $this->session->userdata('personal_gender');?></td>
                                        <td><?php echo $this->session->userdata('personal_religion');?></td>
                                        <td><?php echo $this->session->userdata('personal_race');?></td>
                                        <td><?php echo $this->session->userdata('personal_education');?></td>
                                    </tr>
                                    </tbody>
                                </table>  
                                <br>
                                
                                <table class="tablesorter" width="100%" border="1" align="center">
                                    <thead>
                                        <tr>
                                            <th>Marital Status</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Sub District</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $this->session->userdata('personal_martial_status');?></td>
                                            <td><?php echo $this->session->userdata('personal_address');?></td>
                                            <td><?php echo $this->session->userdata('personal_city');?></td>
                                            <td><?php echo $this->session->userdata('personal_sub_district');?></td>
                                            <td><?php echo $this->session->userdata('personal_home_phone_number');?></td>
                                        </tr>
                                    </tbody>
                                </table>    
                                
                                </div>
                                
                            </div>
                            <div class="signatureBox">
                                <span>Debitur</span>
                                <br>
                                <img src="<?php echo base_url();?>templates/images/logo.png">
                                <span>Butuhuang</span>
                            </div>
                            <label><input name="agree0" value="0" onclick="$(this).val(this.checked ? 1 : 0)" type="checkbox"><span>I agree on all the condition above</span></label>
                            <label><input name="agree1" value="0" onclick="$(this).val(this.checked ? 1 : 0)" type="checkbox"><span>I've read and acept the privacy statement and agree with our fees &amp; charges role.</span></label>
                            <label><input name="agree2" value="0" onclick="$(this).val(this.checked ? 1 : 0)" type="checkbox"><span>I confirm that all the details provided are valid, accurate and true</span></label>
                            <label><input name="agree3" value="0" onclick="$(this).val(this.checked ? 1 : 0)" type="checkbox"><span>I Understand that Butuhuang.com will refer all fraudulent applications to the authorities for prosecution. Your IP Address will be recorded for security purposes.</span></label>
                            <label><input name="agree4" value="0" onclick="$(this).val(this.checked ? 1 : 0)" type="checkbox"><span>By this means you agree and understand that if you do not repay the loan, then PT DIGITAL ALPHA INDONESIA will share your data information to the Banks or other Financial Institutions in Indonesia
and you may not be able to get a loan or credit from both institutions. We will also share your data 
with authorities in Indonesia. </span></label>
                            <em><font color="red"><?php echo $this->session->flashdata('agree0'); ?></font></em>
                            <a href="#" onclick="document.forms[0].submit();return false;" class="defBtn">Submit</a>
                            <?php echo form_close()?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script type="text/javascript">
        var per = <?php echo ($this->session->userdata('loan_length') ? $this->session->userdata('loan_length') : '')?>;
        var d = new Date(); 
        d.setDate(d.getDate() + parseInt(per));
        new_date=$.datepicker.formatDate("dd MM yy",d);     

        $("#s_amount").text(toRp(<?php echo ($this->session->userdata('loan_amount') ? $this->session->userdata('loan_amount') : '')?>));
        $("#s_fee").text(toRp(<?php echo ($this->session->userdata('interest_fee') ? $this->session->userdata('interest_fee') : '')?>));
        $("#s_total").text(toRp(<?php echo ($this->session->userdata('total_repayable') ? $this->session->userdata('total_repayable') : '')?>));
        $("#s_due").text(new_date);
    </script>
        

        
        