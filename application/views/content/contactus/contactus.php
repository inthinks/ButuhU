<section>
            <div class="titleWrapper">
                <div class="titleBox">
                    <div class="titleContent">
                        Contact Us
                    </div>
                    <div class="titleDesc">
                        Kami selalu siap melayani anda. Kepuasan anda adalah tujuan kami.Anda dapat menghubungi kami melalu website butuhuang.com atau langsung email ke support@butuhuang.com 
                    </div>
                </div>
            </div>
            <div class="contactUsWrapper">
                <div class="halfBox">
                <?php echo form_open('contactus/email','id="formID"');?>
                    <ul>
                        <li>
                            <h3>Name</h3>
                            <input type="text" id="name" name="name" class="validate[required,custom[onlyLetterSp]]">
                            <div class="myErrors"></div>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <input type="text" id="email" name="email" class="validate[required,custom[email]]">
                            <div class="myErrors"></div>
                        </li>
                        <li>
                            <h3>Phone Number</h3>
                            <input type="text" id="no_telp" name="no_telp" class="validate[required]">
                            <div class="myErrors"></div>
                        </li>
                        <li>
                            <h3>Messages</h3>
                            <textarea id="pertanyaan" name="pertanyaan" class="validate[required]"></textarea>
                            <div class="myErrors"></div>
                        </li>
                    </ul>
                    <!-- <a href="javascript:void(0)" id="submit" class="defBtn">Send</a> -->
                    <input class="defBtn" type="submit" value="Send"/>
                    <?php echo form_close()?>
                </div>
                <div class="halfBox">
                    <h3>Our Support</h3>
                    Info@Butuhuang.com<br>
                    <div class="contactFooter">
                        <h3>Customer Care</h3>
                        <span>(021) 1234567890</span>
                    </div>
                </div>
            </div>
        </section>
<script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery("#formID" ).validationEngine();
    });
</script>