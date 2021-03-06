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
                <?php echo form_open('step_loan/do_step_4', 'id=formID')?>
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
                        <li><a href="#bank_detail" class="selected">Bank Detail</a></li>
                        <li><a href="#other_detail">Other Detail</a></li>
                        <li><a href="#agreement">Agreement</a></li>
                    </ul>
                    <div class="formBox">
                        <div class="formContent">
                            <div class="formLeftBox">
                                Bank Name*
                                <span>Your Bank to transfer</span>
                            </div>
                            <div class="formRightBox">
                                <select name="bank_name" class="validate[required]">
                                    <?php foreach ($list as $row): ?>
                                    <option value="<?php echo $row['bank_name']?>" <?php echo ($this->session->userdata('bank_name') == $row['bank_name'] ? 'selected' : '');?>><?php echo $row['bank_name']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Bank Account Name*
                                <span>Your bank account name</span>
                            </div>
                            <div class="formRightBox">
                                <input id="name" name="account_name" type="text" value="<?php echo ($this->session->userdata('bank_account_name') ? $this->session->userdata('bank_account_name') : '')  ?>" class="validate[required, custom[onlyLetterSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Bank Account Number*
                                <span>Your bank account number</span>
                            </div>
                            <div class="formRightBox">
                                <input id="number" name="account_number" type="text" value="<?php echo ($this->session->userdata('bank_account_number') ? $this->session->userdata('bank_account_number') : '')  ?>" class="validate[required, custom[onlyNumberSp]]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttonWrapper">
                    <a href="<?php echo site_url('step_loan/step_3'); ?>" class="defBtn prevBtn">&lt; Previous</a>
                    <!-- <a href="javascript:void(0)" id="submit" class="defBtn nextBtn">Next &gt;</a> -->
                    <input class="defBtn nextBtn" type="submit" value="Next &gt;"/>
                </div>
                <?php echo form_close()?>
            </div>
        </section>

<script>
    var per = <?php echo ($this->session->userdata('loan_length') ? $this->session->userdata('loan_length') : '')?>;
    var d = new Date(); 
        d.setDate(d.getDate() + parseInt(per));
        new_date=$.datepicker.formatDate("dd MM yy",d);     

    $("#s_amount").text(toRp(<?php echo ($this->session->userdata('loan_amount') ? $this->session->userdata('loan_amount') : '')?>));
    $("#s_fee").text(toRp(<?php echo ($this->session->userdata('interest_fee') ? $this->session->userdata('interest_fee') : '')?>));
    $("#s_total").text(toRp(<?php echo ($this->session->userdata('total_repayable') ? $this->session->userdata('total_repayable') : '')?>));
    $("#s_due").text(new_date);

    
    jQuery(document).ready(function(){
    jQuery("#formID" ).validationEngine();
    });
</script>