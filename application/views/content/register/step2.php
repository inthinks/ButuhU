<script type="text/javascript">
     jQuery(document).ready(function(){
        jQuery("#formID" ).validationEngine();
        });

</script>
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
            <?php echo form_open('step_loan/do_step_2','id="formID" name="formID"'); ?>
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
                        <li><a href="#personal_detail" class="selected">Personal Detail</a></li>
                        <li><a href="#contact_detail">Contact Detail</a></li>
                        <li><a href="#bank_detail">Bank Detail</a></li>
                        <li><a href="#other_detail">Other Detail</a></li>
                        <li><a href="#agreement">Agreement</a></li>
                    </ul>
                    <div class="formBox" id="personal_detail">
                        
                        <div class="formContent">
                            <div class="formLeftBox">
                                Full Name*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <input name ="fullname" type="text" value="<?php echo ($this->session->userdata('personal_full_name') ? $this->session->userdata('personal_full_name') : '')  ?>" class="validate[required]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Gender*
                                <span>Choose your gender</span>
                            </div>
                            <div class="formRightBox">
                                <label><input name="gender" value='Male' type="radio" <?php echo ($this->session->userdata('personal_gender') == 'Male' ? 'checked' : '')  ?> class="validate[required] text-input"><span>Male</span></label>
                                <label><input name="gender" value='Female' type="radio" <?php echo ($this->session->userdata('personal_gender') == 'Female' ? 'checked' : '')  ?> class="validate[required] text-input"><span>Female</span></label>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Birth Of Date*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <input name="bod" type="text" id="datepicker" value="<?php echo ($this->session->userdata('personal_birth_date') ? $this->session->userdata('personal_birth_date') : '')  ?>" class="validate[required, custom[date]] ">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Place Of Birth*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <input name="pob" type="text" value="<?php echo ($this->session->userdata('personal_birth_place') ? $this->session->userdata('personal_birth_place') : '')  ?>" class="validate[required,custom[onlyLetterSp]] ">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Religion*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <select name ="religion" class="validate[required]" id="religion">
                                    <option value=''  <?php echo ($this->session->userdata('personal_religion') == '' ? 'selected' : '');?>>Choose One</option>
                                    <option value='Islam' <?php echo ($this->session->userdata('personal_religion') == 'Islam' ? 'selected' : '');?>>Islam</option>
                                    <option value='Kristen Protestan' <?php echo ($this->session->userdata('personal_religion') == 'Kristen Protestan' ? 'selected' : '');?>>Kristen Protestan</option>
                                    <option value='Kristen Katolik' <?php echo ($this->session->userdata('personal_religion') == 'Kristen Katolik' ? 'selected' : '');?>>Kristen Katolik</option>
                                    <option value='Budha' <?php echo ($this->session->userdata('personal_religion') == 'Budha' ? 'selected' : '');?>>Budha</option>
                                    <option value='Hindu' <?php echo ($this->session->userdata('personal_religion') == 'Hindu' ? 'selected' : '');?>>Hindu</option>
                                    <option value='Others' <?php echo ($this->session->userdata('personal_religion') == 'Others' ? 'selected' : '');?>>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Education*
                                <span>Your education</span>
                            </div>
                            <div class="formRightBox">
                                <select name ="education" id="education" class="validate[required] text-input" >
                                    <option value=''  <?php echo ($this->session->userdata('personal_education') == '' ? 'selected' : '');?>>Choose one</option>
                                    <option value='SD' <?php echo ($this->session->userdata('personal_education') == 'SD' ? 'selected' : '');?>>SD</option>
                                    <option value='SMP' <?php echo ($this->session->userdata('personal_education') == 'SMP' ? 'selected' : '');?>>SMP</option>
                                    <option value='SMA/SMK' <?php echo ($this->session->userdata('personal_education') == 'SMA/SMK' ? 'selected' : '');?>>SMA / SMK</option>
                                    <option value='Universitas' <?php echo ($this->session->userdata('personal_education') == 'Universitas' ? 'selected' : '');?>>Universitas</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Marital Status*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <select name ="marital" class="validate[required] text-input">
                                    <option value=''  <?php echo ($this->session->userdata('personal_martial_status') == '' ? 'selected' : '');?>>Choose one</option>
                                    <option value='Single' <?php echo ($this->session->userdata('personal_martial_status') == 'Single' ? 'selected' : '');?>>Single</option>
                                    <option value='Married' <?php echo ($this->session->userdata('personal_martial_status') == 'Married' ? 'selected' : '');?>>Married</option>
                                    <option value='Others' <?php echo ($this->session->userdata('personal_martial_status') == 'Others' ? 'selected' : '');?>>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Dependents*
                                <span>Appropriate 0 if you do not have dependents</span>
                            </div>
                            <div class="formRightBox">
                                <input name ="dependent" id="dependent" type="text" value="<?php echo ($this->session->userdata('personal_dependents') ? $this->session->userdata('personal_dependents') : '')  ?>" class="validate[required, custom[onlyNumberSp]]" >
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Race*
                                <span>Choose your race</span>
                            </div>

                            <div class="formRightBox">
                                <select name="race" id="race" class="validate[required] text-input">
                                    <option value=''  >Choose your Race</option>
                                    <option value='Banten' <?php echo ($this->session->userdata('personal_race') == 'Banten' ? 'selected' : '');?>>Banten</option>
                                    <option value='Batak' <?php echo ($this->session->userdata('personal_race') == 'Batak' ? 'selected' : '');?>>Batak</option>
                                    <option value='Betawi' <?php echo ($this->session->userdata('personal_race') == 'Betawi' ? 'selected' : '');?>>Betawi</option>
                                    <option value='Bugis' <?php echo ($this->session->userdata('personal_race') == 'Bugis' ? 'selected' : '');?>>Bugis</option>
                                    <option value='Cina' <?php echo ($this->session->userdata('personal_race') == 'Cina' ? 'selected' : '');?>>Cina</option>
                                    <option value='Jawa' <?php echo ($this->session->userdata('personal_race') == 'Jawa' ? 'selected' : '');?>>Jawa</option>
                                    <option value='Madura' <?php echo ($this->session->userdata('personal_race') == 'Madura' ? 'selected' : '');?>>Madura</option>
                                    <option value='Melayu' <?php echo ($this->session->userdata('personal_race') == 'Melayu' ? 'selected' : '');?>>Melayu</option>
                                    <option value='Minangkabau' <?php echo ($this->session->userdata('personal_race') == 'Minangkabau' ? 'selected' : '');?>>Minangkabau</option>
                                    <option value='Sunda' <?php echo ($this->session->userdata('personal_race') == 'Sunda' ? 'selected' : '');?>>Sunda</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttonWrapper">
                    <a href="<?php echo site_url('step_loan/'); ?>" class="defBtn prevBtn">&lt; Previous</a>
                    <!-- <a id="submit" href="javascript:void(0)" class="defBtn nextBtn">Next &gt;</a> -->
                    <input class="defBtn nextBtn" type="submit" value="Next &gt;"/>
                </div>
                <?php echo form_close(); ?>
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

    

   
    $(document).ready(
        function () {
        $( "#datepicker" ).datepicker({
             yearRange: "1970:2016",
             dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true 
        });
      }

    );
   
</script>


