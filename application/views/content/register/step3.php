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
                <?php echo form_open('step_loan/do_step_3','id=formID')?>
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
                    	<li><a href="#contact_detail" class="selected">Contact Detail</a></li>
                    	<li><a href="#bank_detail">Bank Detail</a></li>
                    	<li><a href="#other_detail">Other Detail</a></li>
                    	<li><a href="#agreement">Agreement</a></li>
                    </ul>
                    <div class="formBox">
                    	<div class="formContent">
                        	<div class="formLeftBox">
                            	Personal ID*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                            	<input name="p_id" id="personal" type="text" value="<?php echo ($this->session->userdata('personal_id') ? $this->session->userdata('personal_id') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Mobile Number*
                                <span>Ex: 0817xxxxx</span>
                            </div>
                            <div class="formRightBox">
                            	<input id="mobile" name="m_number0" type="text" value="<?php echo ($this->session->userdata('personal_mobile_number') ? $this->session->userdata('personal_mobile_number') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Mobile Number 2
                                <span>Ex: 0817xxxxx</span>
                            </div>
                            <div class="formRightBox">
                            	<input id="mobile2" name="m_number1"type="text" value="<?php echo ($this->session->userdata('personal_mobile_number2') ? $this->session->userdata('personal_mobile_number2') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Address*
                                <span>Main address with your KTP<br>Ex: Jalan S.Parman Kav 22-24</span>
                            </div>
                            <div class="formRightBox">
                            	<textarea id="address" name="address" class="validate[required]"><?php echo ($this->session->userdata('personal_address') ? $this->session->userdata('personal_address') : ''); ?></textarea>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Home Status*
                                <span>Choose your home status</span>
                            </div>
                            <div class="formRightBox">
                            	<select name="home_status" class="validate[required]">
                                    <option value="" <?php echo ($this->session->userdata('personal_home_status') == '' ? 'selected' : '');?>>Choose one</option>
                                	<option value="Sewa" <?php echo ($this->session->userdata('personal_home_status') == 'Sewa' ? 'selected' : '');?>>Sewa</option>
                                	<option value="Milik Sendiri" <?php echo ($this->session->userdata('personal_home_status') == 'Milik Sendiri' ? 'selected' : '');?>>Milik Sendiri</option>
                                	<option value="Milik Keluarga" <?php echo ($this->session->userdata('personal_home_status') == 'Milik Keluarga' ? 'selected' : '');?>>Milik Keluarga</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	How Long you lived at above address??*
                                <span>appropriate with years and months</span>
                            </div>
                            <div class="formRightBox">
                            	<div class="halfBox">
                                    <select name="how_long_year" class="validate[required]">
                                        <option value="" <?php echo ($this->session->userdata('personal_length_years') == '' ? 'selected' : '');?>>Years</option>
                                        <?php for($i=1; $i<100; $i++){?>
                                        <option value="<?php echo $i ?>" <?php echo ($this->session->userdata('personal_length_years') == $i ? 'selected' : '');?>><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="halfBox">
                                    <select name="how_long_month" class="validate[required]">
                                        <option value="" <?php echo ($this->session->userdata('personal_length_months') == '' ? 'selected' : '');?>>Months</option>
                                        <?php for($i=1; $i<12; $i++){?>
                                        <option value="<?php echo $i ?>" <?php echo ($this->session->userdata('personal_length_months') == $i ? 'selected' : '');?>><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Province*
                                <span>Choose province with your KTP</span>
                            </div>
                            <div class="formRightBox">
                            	<select name="province" id="prop" onchange="ajaxkota(this.value)" class="validate[required]">
                                    <?php foreach($wilayah as $row){ ?>
                                	<option value="<?php echo $row['lokasi_propinsi'];?>" <?php echo ($this->session->userdata('personal_province') == $row['lokasi_propinsi'] ? 'selected' : '');?>><?php echo $row['lokasi_nama'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                     </div   </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	City / munipalicity / regency*
                                <span>Choose city / munipalicity / regency with your KTP</span>
                            </div>
                            <div class="formRightBox">
                            	<select name="city" class="validate[required]" id="kota" onchange="kec(this.value)" >
                                    <option>Choose One</option>
                                    <option>Choose One</option>
                                    <option>Choose One</option>

                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Sub-district*
                                <span>Choose sub-district with your KTP</span>
                            </div>
                            <div class="formRightBox" class="validate[required]" >
                            	<select name="sub_district" id="kecamatan">
                                    <option>Choose One</option>
                                    <option>Choose One</option>
                                    <option>Choose One</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Post Code*
                                <span>Your postal code</span>
                            </div>
                            <div class="formRightBox">
                            	<input id="post" name="post_code" type="text" value="<?php echo ($this->session->userdata('personal_post_code') ? $this->session->userdata('personal_post_code') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div  	<div class="formLeftBox">
                            	Phone Number<br>Appropriate with KTP address*
                                <span>Ex:02xxx</span>
                            </div>
                            <div class="formRightBox">
                            	<input id="phone" name="phone_number"type="text" value="<?php echo ($this->session->userdata('personal_home_phone_number') ? $this->session->userdata('personal_home_phone_number') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                        	<label><input id="domicile" type="checkbox" name="domicile" value="0" onclick="$(this).val(this.checked ? 1 : 0)"><span>Domicile address is similiar with above address</span></label>
                        </div>
                        <div class="fullBox" id="domicile1">
                        	<div class="formContent">
                            <div class="formLeftBox">
                                Personal ID*
                                <span>Appropriate with Your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <input id="personal_" name="p_id_" type="text" value="<?php echo ($this->session->userdata('personal_domicile_id') ? $this->session->userdata('personal_domicile_id') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Mobile Number*
                                <span>Ex: 0817xxxxx</span>
                            </div>
                            <div class="formRightBox">
                                <input id="mobile_"name="m_number0_" type="text" value="<?php echo ($this->session->userdata('personal_domicile_mobile_number') ? $this->session->userdata('personal_domicile_mobile_number') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Mobile Number 2
                                <span>Ex: 0817xxxxx</span>
                            </div>
                            <div class="formRightBox">
                                <input id="mobil2_"name="m_number1_"type="text" value="<?php echo ($this->session->userdata('personal_domicile_mobile_number2') ? $this->session->userdata('personal_domicile_mobile_number2') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Address*
                                <span>Main address with your KTP<br>Ex: Jalan S.Parman Kav 22-24</span>
                            </div>
                            <div class="formRightBox">
                                <textarea id="address_" name="address_" class="validate[required]"><?php echo ($this->session->userdata('personal_domicile_address') ? $this->session->userdata('personal_domicile_address') : '')  ?></textarea>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Home Status*
                                <span>Choose your home status</span>
                            </div>
                            <div class="formRightBox">
                                <select name="home_status_" class="validate[required]">
                                    <option value="" <?php echo ($this->session->userdata('personal_domicile_home_status') == '' ? 'selected' : '');?>>Choose one</option>
                                    <option value="Sewa" <?php echo ($this->session->userdata('personal_domicile_home_status') == 'Sewa' ? 'selected' : '');?>>Sewa</option>
                                    <option value="Milik Sendiri" <?php echo ($this->session->userdata('personal_domicile_home_status') == 'Milik Sendiri' ? 'selected' : '');?>>Milik Sendiri</option>
                                    <option value="Milik Keluarga" <?php echo ($this->session->userdata('personal_domicile_home_status') == 'Milik Keluarga' ? 'selected' : '');?>>Milik Keluarga</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                How Long you lived at above address??*
                                <span>appropriate with years and months</span>
                            </div>
                            <div class="formRightBox">
                                <div class="halfBox">
                                    <select name="how_long_year_" class="validate[required]">
                                        <option value="" <?php echo ($this->session->userdata('personal_domicile_length_years') == '' ? 'selected' : '');?>>Years</option>
                                        <?php for($i=1; $i<100; $i++){?>
                                        <option value="<?php echo $i ?>" <?php echo ($this->session->userdata('personal_domicile_length_years') == $i ? 'selected' : '');?>><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="halfBox">
                                    <select name="how_long_month_" class="validate[required]">
                                        <option value="" <?php echo ($this->session->userdata('personal_domicile_length_months') == '' ? 'selected' : '');?>>Months</option>
                                        <?php for($i=1; $i<12; $i++){?>
                                        <option value="<?php echo $i ?>" <?php echo ($this->session->userdata('personal_domicile_length_months') == $i ? 'selected' : '');?>><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Province*
                                <span>Choose province with your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <select name="province_" class="validate[required]" id="prop1" onchange="ajaxkota1(this.value)">
                                    <?php foreach($wilayah as $row){ ?>
                                    <option value="<?php echo $row['lokasi_propinsi'];?>" <?php echo ($this->session->userdata('personal_domicile_province') == $row['lokasi_propinsi'] ? 'selected' : '');?>><?php echo $row['lokasi_nama'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                City / munipalicity / regency*
                                <span>Choose city / munipalicity / regency with your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <select name="city_" class="validate[required]" id="kota1" onchange="kec1(this.value)">
                                    <option >Choose one</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Sub-district*
                                <span>Choose sub-district with your KTP</span>
                            </div>
                            <div class="formRightBox">
                                <select name="sub_district_" class="validate[required]" id="kecamatan1">
                                     <option >Choose one</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Post Code*
                                <span>Your postal code</span>
                            </div>
                            <div class="formRightBox">
                                <input id="post_" name="post_code_" type="text" value="<?php echo ($this->session->userdata('personal_domicile_post_code') ? $this->session->userdata('personal_domicile_post_code') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Phone Number<br>Appropriate with KTP address*
                                <span>Ex:02xxx</span>
                            </div>
                            <div class="formRightBox">
                                <input id="phone_" name="phone_number_"type="text" value="<?php echo ($this->session->userdata('personal_domicile_home_phone_number') ? $this->session->userdata('personal_domicile_home_phone_number') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                    </div>
                        <div class="formContent">
                        	<span>Closet Family data / (Note: Derby and not live in the same home)</span>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Family Name 1*
                                <span>Your family name</span>
                            </div>
                            <div class="formRightBox">
                                <input id="f_name" name="f_name" type="text" value="<?php echo ($this->session->userdata('relative_full_name') ? $this->session->userdata('relative_full_name') : '')  ?>" class="validate[required]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Family Address*
                                <span>Main address with your KTP<br>ex: Jalan S.Parman Kav 22-24</span>
                            </div>
                            <div class="formRightBox">
                                <textarea id="f_address" name="f_address" class="validate[required]"><?php echo ($this->session->userdata('relative_address') ? $this->session->userdata('relative_address') : '')  ?></textarea>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Province*
                                <span>Choose province</span>
                            </div>
                            <div class="formRightBox">
                            	<select name="f_province" class="validate[required]" id="prop2" onchange="ajaxkota2(this.value)">
                                	<?php foreach($wilayah as $row){ ?>
                                    <option value="<?php echo $row['lokasi_propinsi'];?>" <?php echo ($this->session->userdata('relative_province') == $row['lokasi_propinsi'] ? 'selected' : '');?>><?php echo $row['lokasi_nama'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	City / munipalicity / regency*
                                <span>Choose city / munipalicity / regency with your KTP</span>
                            </div>
                            <div class="formRightBox">
                            	<select name="f_city" class="validate[required]" id="kota2" onchange="kec2(this.value)">
                                	<option >Choose one</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Sub-district*
                                <span>Choose sub-district with your KTP</span>
                            </div>
                            <div class="formRightBox">
                            	<select name="f_district" class="validate[required]" id="kecamatan2">
                                	<option >Choose one</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Post Code*
                                <span>Your postal code</span>
                            </div>
                            <div class="formRightBox">
                            	<input id="f_post" name="f_post_code" type="text" value="<?php echo ($this->session->userdata('relative_post_code') ? $this->session->userdata('relative_post_code') : '')  ?>" class="validate[required]">
                            </div>
                        </div>
                        <div class="formContent">
                        	<div class="formLeftBox">
                            	Family Phone Number*
                                <span>Ex:02xxx</span>
                            </div>
                            <div class="formRightBox">
                            	<input id="f_phone" name="f_phone_number" type="text" value="<?php echo ($this->session->userdata('relative_home_phone_number') ? $this->session->userdata('relative_home_phone_number') : '')  ?>" class="validate[required,custom[onlyNumberSp]]">
                            </div>
                        </div>
                    </div>
               	</div>
                <div class="buttonWrapper">
                    <a href="<?php echo site_url('step_loan/step_2'); ?>" class="defBtn prevBtn">&lt; Previous</a>
                    <!-- <a id="submit" href="javascript:void(0)" class="defBtn nextBtn">Next &gt;</a> -->
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

    
    $("#domicile").change(function(){
        if(this.checked)
            $("#domicile1").hide();
         else 
            $("#domicile1").show();
    });
    
        jQuery(document).ready(function(){
        jQuery("#formID" ).validationEngine();
        });

    function ajaxkota(id){
        $.ajax({
            url :'<?php echo base_url('step_loan/kota')?>'+'/'+id,
            type : "POST",
            success: function(response){
                $('#kota').html(response);
                if($('select').length>0){
                $('select').selectOrDie('destroy');
                $('select').selectOrDie();
                }
            }
        })

    }


    function kec(d, id){
        var d = $('#prop').val();
        var id = $('#kota :selected').attr('data');
        
        $.ajax({
            url :'<?php echo base_url('step_loan/kec')?>'+'/'+d+'/'+id,
            type : "POST",
            success: function(response){
                $('#kecamatan').html(response);
                if($('select').length>0){
                $('select').selectOrDie('destroy');
                $('select').selectOrDie();

                }
            }
        })
    }

        function ajaxkota1(id){
        $.ajax({
            url :'<?php echo base_url('step_loan/kota')?>'+'/'+id,
            type : "POST",
            success: function(response){
                $('#kota1').html(response);
                if($('select').length>0){
                $('select').selectOrDie('destroy');
                $('select').selectOrDie();
                }
            }
        })

    }


    function kec1(d, id){
        var d = $('#prop1').val();
        var id = $('#kota1 :selected').attr('data');
        
        $.ajax({
            url :'<?php echo base_url('step_loan/kec')?>'+'/'+d+'/'+id,
            type : "POST",
            success: function(response){
                $('#kecamatan1').html(response);
                if($('select').length>0){
                $('select').selectOrDie('destroy');
                $('select').selectOrDie();

                }
            }
        })
    }

    function ajaxkota2(id){
        $.ajax({
            url :'<?php echo base_url('step_loan/kota')?>'+'/'+id,
            type : "POST",
            success: function(response){
                $('#kota2').html(response);
                if($('select').length>0){
                $('select').selectOrDie('destroy');
                $('select').selectOrDie();
                }
            }
        })

    }


    function kec2(d, id){
        var d = $('#prop2').val();
        var id = $('#kota2 :selected').attr('data');
        
        $.ajax({
            url :'<?php echo base_url('step_loan/kec')?>'+'/'+d+'/'+id,
            type : "POST",
            success: function(response){
                $('#kecamatan2').html(response);
                if($('select').length>0){
                $('select').selectOrDie('destroy');
                $('select').selectOrDie();

                }
            }
        })
    }

    window.onload = ajaxkota($('#prop').val());
    window.onload = ajaxkota($('#prop1').val());
    window.onload = ajaxkota($('#prop2').val());
    </script>