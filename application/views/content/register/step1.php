<section>
            <div class="stepWrapper">
                <ul>
                    <li class="selected">
                        <div class="stepImage">1</div>
                        <div class="stepInfo">Choose Your Loan</div>
                    </li>
                    <li>
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
                <?php echo form_open('step_loan/do_step_1') ?>
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
                                <li id="nil">Rp 1.000.000,-</li>
                                <li id="fee">Rp 10.000,-</li>
                                <li id="pay">Rp 1.010.000,-</li>
                                <li id="per">31 Sept 2016</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="chooseYourLoan">
                    <div class="loanLeftBox">
                        <ul>
                            <li>
                                <span>Jumlah Pinjaman</span>
                                <div class="selectBox">
                                    <select name="nilai" id="nilai" onchange="getNilai()" required>
                                        
                                        <?php for($i=$data['min_amount']; $i<=$data['max_amount']; $i=$i+100000){ ?>
                                        <option value="<?php echo $i; ?>" <?php echo ($this->session->userdata('nilai') == $i ? 'selected' : '');?>>Rp. <?php echo number_format($i,'0',',','.'); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <span>Periode Pinjaman</span>
                                <div class="selectBox">
                                    <select name="period" id="period" onchange="getPeriod()" required>
                                        
                                        <?php for($i=$data['min_period']; $i<=$data['max_period']; $i++){ ?>
                                        <option value='<?php echo $i ?>' <?php echo ($this->session->userdata('periode') == $i ? 'selected' : '');?>><?php echo $i ?> Hari</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="loanRightBox">
                        <span>Loan Detail</span>
                        <div class="loanDescBox">
                            <table>
                                <tr>
                                    <td>Loan Amount</td>
                                    <td>:</td>
                                    <td id="loan">Rp. 1.000.000,-</td>
                                </tr>
                                <tr>
                                    <td>Interest / Fee</td>
                                    <td>:</td>
                                    <td id="ints">Rp. 10.000,-</td>
                                </tr>
                                <tr>
                                    <td>Total Repayable</td>
                                    <td>:</td>
                                    <td id="total">Rp. 1.010.000,-</td>
                                </tr>
                                <tr>
                                    <td>Due Date</td>
                                    <td>:</td>
                                    <td id="due">31 Sept 2016</td>
                                </tr>
                            </table>
                        </div>
                        <input type="hidden" name="loan_amount" id="loan_amount" value=""/>
                        <input type="hidden" name="loan_length" id="loan_length" value=""/>
                        <input type="hidden" name="interest_fee" id="interest_fee" value=""/>
                        <input type="hidden" name="total_repayable" id="total_repayable" value=""/>
                        <input type="hidden" name="due_date" id="due_date" value=""/>
                    </div>
                </div>
                <div class="buttonWrapper">
                        <a href="#" onclick="document.forms[0].submit();return false;"class="defBtn nextBtn">Next &gt;</a>
                    </div>
                    <?php echo form_close(); ?>
            </div>
        </section>



<script type="text/javascript">

    function getNilai(){
        var nilai = document.getElementById('nilai').value;
        var period = document.getElementById('period').value;

        var d = new Date(); 
        d.setDate(d.getDate() + parseInt(period));
        new_date=$.datepicker.formatDate("dd MM yy",d);
        new_dates=$.datepicker.formatDate("y-m-d",d);

        $("#due").text(new_date);
        $("#per").text(new_date);


        var per = document.getElementById('per');
        var nil = document.getElementById('nil');
        var fee = document.getElementById('fee');
        var pay = document.getElementById('pay');
        var loan = document.getElementById('loan');
        var ints = document.getElementById('ints');
        var tot = document.getElementById('total');

         nil.innerHTML = toRp(nilai) +',-';
         loan.innerHTML = toRp(nilai) +',-';
         var p = nilai * (period * <?php echo $data['interest'];?>) /100
         fee.innerHTML = toRp(nilai * (period * <?php echo $data['interest'];?>) /100) +',-';
         ints.innerHTML = toRp(nilai * (period * <?php echo $data['interest'];?>) /100) +',-';
         var total = parseInt(nilai) + parseInt(p);
         pay.innerHTML = toRp(parseInt(nilai) + parseInt(p)) + ',-';
         tot.innerHTML = toRp(parseInt(nilai) + parseInt(p)) + ',-';

         $("#loan_amount").val(nilai);
         $("#loan_length").val(period);
         $("#interest_fee").val(p);
         $("#total_repayable").val(total);
         $("#due_date").val(new_dates);
    }

    function getPeriod(){
       var nilai = document.getElementById('nilai').value;
        var period = document.getElementById('period').value;

        var d = new Date(); 
        d.setDate(d.getDate() + parseInt(period));
        new_date=$.datepicker.formatDate("dd MM yy",d);
        new_dates=$.datepicker.formatDate("y-m-d",d);

        $("#due").text(new_date);
        $("#per").text(new_date);


        var per = document.getElementById('per');
        var nil = document.getElementById('nil');
        var fee = document.getElementById('fee');
        var pay = document.getElementById('pay');
        var loan = document.getElementById('loan');
        var ints = document.getElementById('ints');
        var tot = document.getElementById('total');

         nil.innerHTML = toRp(nilai) +',-';
         loan.innerHTML = toRp(nilai) +',-';
         var p = nilai * (period * <?php echo $data['interest'];?>) /100
         fee.innerHTML = toRp(nilai * (period * <?php echo $data['interest'];?>) /100) +',-';
         ints.innerHTML = toRp(nilai * (period * <?php echo $data['interest'];?>) /100) +',-';
         var total = parseInt(nilai) + parseInt(p);
         pay.innerHTML = toRp(parseInt(nilai) + parseInt(p)) + ',-';
         tot.innerHTML = toRp(parseInt(nilai) + parseInt(p)) + ',-';

         $("#loan_amount").val(nilai);
         $("#loan_length").val(period);
         $("#interest_fee").val(p);
         $("#total_repayable").val(total);
         $("#due_date").val(new_dates);
    }
    
    var nilAwal = <?php echo $data['min_amount'];?>;
    var perAwal = <?php echo $data['min_period'];?>;
    var d = new Date(); 
        d.setDate(d.getDate() + parseInt(perAwal));
        new_date=$.datepicker.formatDate("dd MM yy",d);

        $("#due").text(new_date);
        $("#per").text(new_date);

     var nilai = document.getElementById('nilai').value;
     var period = document.getElementById('period').value;       

    $("#s_amount").text(<?php echo ($this->session->userdata('loan_amount') ? $this->session->userdata('loan_amount') : '')?>);
    $("#s_fee").text(<?php echo ($this->session->userdata('interest_fee') ? $this->session->userdata('interest_fee') : '')?>);
    $("#s_total").text(<?php echo ($this->session->userdata('total_repayable') ? $this->session->userdata('total_repayable') : '')?>);
    $("#s_due").text(new_date);

</script>

<script type="text/javascript">
    window.onload = getNilai;
    window.onload = getPeriod;

    var nilAwal = <?php echo $data['min_amount'];?>;
    var perAwal = <?php echo $data['min_period'];?>;
    var d = new Date(); 
        d.setDate(d.getDate() + parseInt(perAwal));
        new_date=$.datepicker.formatDate("dd MM yy",d);

        $("#due").text(new_date);
        $("#per").text(new_date);

     var nilai = document.getElementById('nilai').value;
     var period = document.getElementById('period').value;       

    $("#s_amount").text(<?php echo ($this->session->userdata('loan_amount') ? $this->session->userdata('loan_amount') : '')?>);
    $("#s_fee").text(<?php echo ($this->session->userdata('interest_fee') ? $this->session->userdata('interest_fee') : '')?>);
    $("#s_total").text(<?php echo ($this->session->userdata('total_repayable') ? $this->session->userdata('total_repayable') : '')?>);
    $("#s_due").text(new_date);
</script>