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
                    <li class="selected orange">
                        <div class="stepImage">3</div>
                        <div class="stepInfo">Phone Verification</div>
                    </li>
                    <li>
                        <div class="stepImage">4</div>
                        <div class="stepInfo">Finish</div>
                    </li>
                </ul>
            </div>
            <div class="setupBox">
                <?php echo form_open('step_loan/step_phone','id="formID"')?>
                <h3>Tinggal Selangkah Lagi!</h3>
                <div class="verificationBox">
                    Dengan klik tombol <b>SETUJU</b>   Anda telah menyetujui semua ketentuan yang berlaku.<br /><br />
                    <input class="defBtn " type="submit" value="SETUJU"/>
                    <input type="hidden" name="phone" />
                <?php echo form_close()?>
                </div>
            </div>
        </section>

<script type="text/javascript">
     jQuery(document).ready(function(){
        jQuery("#formID" ).validationEngine();
        });

</script>