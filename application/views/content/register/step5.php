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
                <?php echo form_open('step_loan/do_step_5','id=formID'); ?>
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
                        <li><a href="#other_detail" class="selected">Other Detail</a></li>
                        <li><a href="#agreement">Agreement</a></li>
                    </ul>
                    <div class="formBox">
                        <div class="formContent">
                            <div class="formLeftBox">
                                Employment Type* 
                                <span>Your employment type</span>
                            </div>
                            <div class="formRightBox">
                                <select name="type" class="validate[required]">
                                    <option value="" <?php echo ($this->session->userdata('employment_type') == '' ? 'selected' : '');?>>Choose one</option>
                                    <option value="Full Time" <?php echo ($this->session->userdata('employment_type') == 'Full Time' ? 'selected' : '');?>>Full Time</option>
                                    <option value="Part Time" <?php echo ($this->session->userdata('employment_type') == 'Part Time' ? 'selected' : '');?>>Part Time</option>
                                    <option value="Wirausaha" <?php echo ($this->session->userdata('employment_type') == 'Wirausaha' ? 'selected' : '');?>>Wirausaha</option>
                                    <option value="Kontrak" <?php echo ($this->session->userdata('employment_type') == 'Kontrak' ? 'selected' : '');?>>Kontrak</option>
                                    <option value="Magang" <?php echo ($this->session->userdata('employment_type') == 'Magang' ? 'selected' : '');?>>Magang</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Employment Name*
                                <span>Employment name</span>
                            </div>
                            <div class="formRightBox">
                                <input id="name" name="name" type="text" value="<?php echo ($this->session->userdata('employment_company_name') ? $this->session->userdata('employment_company_name') : ''); ?>" class="validate[required, custom[onlyLetterSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Employment Role*
                                <span>Your current position</span>
                            </div>
                            <div class="formRightBox">
                                <input id="role" name="role" type="text" value="<?php echo ($this->session->userdata('employment_company_role') ? $this->session->userdata('employment_company_role') : ''); ?>" class="validate[required]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Address*
                                <span>Main address with your KTP<br>ex: jalan S.Parman Kav 22-24</span>
                            </div>
                            <div class="formRightBox">
                                <textarea id="address" name="address" class="validate[required]"><?php echo ($this->session->userdata('employment_company_address') ? $this->session->userdata('employment_company_address') : '')  ?></textarea>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Employment Phone Number*
                                <span>Ex: 021xxxxx</span>
                            </div>
                            <div class="formRightBox">
                                <input id="phone_number" name="phone_number" type="text" value="<?php echo ($this->session->userdata('employment_company_phone_number') ? $this->session->userdata('employment_company_phone_number') : '')  ?>" class="validate[required, custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Monthly Income*
                                <span>Ex: 3000000 for 3 million rupiah</span>
                            </div>
                            <div class="formRightBox">
                                <input id="income" name="income" type="text" value="<?php echo ($this->session->userdata('main_monthly_income') ? $this->session->userdata('main_monthly_income') : '')  ?>" class="validate[required, custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Length Of Work*
                                <span>appropriate with years and months</span>
                            </div>
                            <div class="formRightBox">
                                <div class="halfBox">

                                    <select name="year" class="validate[required]">
                                        <option value='' <?php echo ($this->session->userdata('employment_length_years') == '' ? 'selected' : '');?> >Years</option>
                                        <?php for($i=1; $i<100; $i++){?>
                                        <option value="<?php echo $i ?>" <?php echo ($this->session->userdata('employment_length_years') == $i ? 'selected' : '');?>><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="halfBox">
                                    <select name="month" class="validate[required]">
                                        <option value=''  <?php echo ($this->session->userdata('employment_length_months') == '' ? 'selected' : '');?>>Months</option>
                                        <?php for($i=1; $i<12; $i++){?>
                                        <option value="<?php echo $i ?>" <?php echo ($this->session->userdata('employment_length_months') == $i ? 'selected' : '');?>><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Main Expenses*
                                <span>Ex: 2000000 for 2 million rupiah</span>
                            </div>
                            <div class="formRightBox">
                                <input id="expenses" name="expenses" type="text" value="<?php echo ($this->session->userdata('main_expenses') ? $this->session->userdata('main_expenses') : '')  ?>" class="validate[required, custom[onlyNumberSp]]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                House of loan*
                                <span>Appropriate 0 if you do not have houseloan</span>
                            </div>
                            <div class="formRightBox">
                                <input id="house" name="house_loan" type="text" value="<?php echo ($this->session->userdata('house_of_loan') ? $this->session->userdata('house_of_loan') : '')  ?>" class="validate[required]">
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Purpose of Loan*
                                <span>Choose purpose of loan</span>
                            </div>
                            <div class="formRightBox">
                                <select name="purpose" class="validate[required]">
                                    <option value="" <?php echo ($this->session->userdata('purpose_of_loan') == '' ? 'selected' : '');?>>Choose one</option>
                                    <option value="Keperluan Pengobatan" <?php echo ($this->session->userdata('purpose_of_loan') == 'Keperluan Pengobatan' ? 'selected' : '');?>>Keperluan Pengobatan</option>
                                    <option value="Pembayaran Pendidikan" <?php echo ($this->session->userdata('purpose_of_loan') == 'Pembayaran Pendidikan' ? 'selected' : '');?>>Pembayaran Pendidikan</option>
                                    <option value="Pembelian Konsumtif" <?php echo ($this->session->userdata('purpose_of_loan') == 'Pembelian Konsumtif' ? 'selected' : '');?>>Pembelian Konsumtif</option>
                                    <option value="Pembayaran Hutang" <?php echo ($this->session->userdata('purpose_of_loan') == 'Pembayaran Hutang' ? 'selected' : '');?>>Pembayaran Hutang</option>
                                    <option value="Pembelian Kendaraan" <?php echo ($this->session->userdata('purpose_of_loan') == 'Pembelian Kendaraan' ? 'selected' : '');?>>Pembelian Kendaraan</option>
                                    <option value="Modal Usaha" <?php echo ($this->session->userdata('purpose_of_loan') == 'Modal Usaha' ? 'selected' : '');?>>Modal Usaha</option>
                                    <option value="Uang Muka Pembelajaran" <?php echo ($this->session->userdata('purpose_of_loan') == 'Uang Muka Pembelajaran' ? 'selected' : '');?>>Uang Muka Pembelajaran</option>
                                    <option value="Liburan Keluarga" <?php echo ($this->session->userdata('purpose_of_loan') == 'Liburan Keluarga' ? 'selected' : '');?>>Liburan Keluarga</option>
                                    <option value="Wisata ke Luar Negeri" <?php echo ($this->session->userdata('purpose_of_loan') == 'Wisata ke Luar Negeri' ? 'selected' : '');?>>Wisata ke Luar Negeri</option>
                                    <option value="Perbaikan Kendaraan" <?php echo ($this->session->userdata('purpose_of_loan') == 'Perbaikan Kendaraan' ? 'selected' : '');?>>Perbaikan Kendaraan</option>
                                    <option value="Hidup Sehari-hari" <?php echo ($this->session->userdata('purpose_of_loan') == 'Hidup Sehari-hari' ? 'selected' : '');?>>Hidup Sehari-hari</option>
                                    <option value="Pembayaran Sewa Tanah" <?php echo ($this->session->userdata('purpose_of_loan') == 'Pembayaran Sewa Tanah' ? 'selected' : '');?>>Pembayaran Sewa Tanah</option>
                                    <option value="Lain-lain" <?php echo ($this->session->userdata('purpose_of_loan') == 'Lain-lain' ? 'selected' : '');?>>Lain-lain</option>
                                </select>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="formLeftBox">
                                Knowing Butuhuang.com*
                                <span>Choose knowing Butuhuang.com</span>
                            </div>
                            <div class="formRightBox">
                                <select name="knowing" class="validate[required]">
                                    <option value="" <?php echo ($this->session->userdata('knowing_butuh_uang') == '' ? 'selected' : '');?>>Choose one</option>
                                    <option value="Sosial" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Sosial' ? 'selected' : '');?>>Sosial Media</option>
                                    <option value="E-Mail" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'E-Mail' ? 'selected' : '');?>>E-Mail</option>
                                    <option value="Radio" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Radio' ? 'selected' : '');?>>Radio</option>
                                    <option value="Televisi" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Televisi' ? 'selected' : '');?>>Televisi</option>
                                    <option value="XXI" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'XXI' ? 'selected' : '');?>>XXI</option>
                                    <option value="CGV Blitz" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'CGV Blitz' ? 'selected' : '');?>>CGV Blitz</option>
                                    <option value="Referensi Teman" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Referensi Teman' ? 'selected' : '');?>>Referensi Teman</option>
                                    <option value="Iklan Billboard" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Iklan Billboard' ? 'selected' : '');?>>Iklan Billboard</option>
                                    <option value="KRL" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'KRL' ? 'selected' : '');?>>KRL</option>
                                    <option value="Busway" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Busway' ? 'selected' : '');?>>Busway</option>
                                    <option value="Cari Langsung" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Cari Langsung' ? 'selected' : '');?>>Cari Langsung</option>
                                    <option value="Lain-lain" <?php echo ($this->session->userdata('knowing_butuh_uang') == 'Lain-lain' ? 'selected' : '');?>>Lain-lain</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttonWrapper">
                    <a href="<?php echo site_url('step_loan/step_4'); ?>" class="defBtn prevBtn">&lt; Previous</a>
                    <!-- <a href="javascript:void(0)" id="submit" class="defBtn nextBtn">Next &gt;</a> -->
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

    jQuery(document).ready(function(){
    jQuery("#formID" ).validationEngine();
    });
    </script>