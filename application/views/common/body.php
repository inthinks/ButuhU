<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="HandheldFriendly" content="true">
<title><?php echo $title ?></title>
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<?php if($this->uri->segment(1)=='step_loan'){echo '<link href="<?php echo base_url();?>templates/css/dt.css" rel="stylesheet" type="text/css">';} ?>
<link href="<?php echo base_url();?>templates/css/butuhuang.css" rel="stylesheet" type="text/css">
<?php if($this->uri->segment(1)=='home' || $this->uri->segment(1)=='') { ?>
<style type="text/css">
.ui-widget-content{
    background:#F5B419 !important;
    border:none !important;
    height:5px !important;
    border-radius:5px !important;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
    height:25px !important;
    width:25px !important;
    border:none !important;
    background:url(templates/images/icon_rounded.png) no-repeat top center !important;
}
.ui-slider-horizontal .ui-slider-handle{
    top:-10px !important;
}
.ui-slider-float .ui-slider-tip, .ui-slider-float .ui-slider-tip-label{
    width:auto !important;
    padding:0 10px !important;
    margin-left:0 !important;
    -webkit-transform:translateX(-50%) !important;
    -moz-transform:translateX(-50%) !important;
    transform:translateX(-50%) !important;
}
</style> 
<?php } ?>

<link href="<?php echo base_url();?>templates/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>templates/css/selectordie.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>templates/css/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>templates/css/jquery-ui-slider-pips.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>templates/css/validationEngine.jquery.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>templates/css/butuhuang-mobile.css" rel="stylesheet" type="text/css">


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.js"></script>
<script src="<?php echo base_url();?>templates/js/jquery.validationEngine-en.js"></script>
<script src="<?php echo base_url();?>templates/js/jquery.validationEngine.js"></script>
<script src="<?php echo base_url();?>templates/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>templates/js/selectordie.js"></script>
<script src="<?php echo base_url();?>templates/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>templates/js/mwheelIntent.js"></script>
<script src="<?php echo base_url();?>templates/js/jquery.jscrollpane.min.js"></script>
<script src="<?php echo base_url();?>templates/js/jquery-ui-slider-pips.js"></script>
<script src="<?php echo base_url();?>templates/js/main.js"></script>

</head>
<script type="text/javascript">
	function toRp(angka){
            var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
            var rev2    = '';
            for(var i = 0; i < rev.length; i++){
                rev2  += rev[i];
                if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
                    rev2 += '.';
                }
            }
            return 'Rp. ' + rev2.split('').reverse().join('');
        }
</script>

<body>
    <div class="wrapper">
        <?php $this->load->view('common/header');?>
        <?php $this->load->view($content);?>
        <?php $this->load->view('common/footer');?>
    </div>

    <div class="popup-all" id="menu-blue">
        <div class="popup-overlay"></div>
        <div class="popup-box">
            <div class="popup-header">
                <div class="popup-header-left">
                    <a href="#"><div class="icon-man-white"></div></a> Hello, <a href="#"><?php if($this->session->userdata('user_logged_in')==true){echo $this->session->userdata('user_username'); echo '!';}else{echo 'Guest!';}?></a>
                    <?php if(!$this->session->userdata('user_logged_in')==true) { ?> <p>Not yet member, register <a href="<?php echo site_url('login')?>">here</a></p> <?php } ?>
                </div>
                <div class="popup-header-right">
                    <a href="#" onClick="hide_popup_menu(); return false;"><div class="icon-close"></div></a>
                </div>
            </div>
            <div class="popup-content">
                <?php if($this->session->userdata('user_logged_in')==true){ ?><h2><a href="<?php echo site_url('dashboard/loan_list')?>">Costumer Page</a></h2>
                <?php } else { ?><h2><a href="<?php echo site_url('home')?>">Home</a></h2>
                <?php } ?>
                <h2><a href="<?php echo site_url('aboutus')?>">About Us</a></h2>
                <h2><a href="<?php echo site_url('fees')?>">Fees and Charges</a></h2>
                <h2><a href="<?php echo site_url('contactus')?>">Contact Us</a></h2>
                <hr></hr>
                <h2><a href="<?php echo site_url('terms_condition')?>">Term and Condition</a></h2>
                <h2><a href="<?php echo site_url('privacy')?>">Privacy and Policy</a></h2>
                <h2><a href="<?php echo site_url('privacy')?>">Contact Us</a></h2>
                <h2><a href="<?php echo site_url('faq')?>">FAQ</a></h2>
                <p>copyright &copy; 2015 ButuhUang.com</p>
            </div>
        </div>
    </div>

<?php if($this->uri->segment(1)=='home' || $this->uri->segment(1)=='') { ?>
 <script>
        function addCommas(nStr){
            nStr += '';
            var x = nStr.split('.');
            var x1 = x[0];
            var x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx,'$1' + '.' + '$2');
            }
            
            
            strs='Rp. ' + x1 + x2 +',-';
            return strs;
        }
        
        function calculate_loan(){
            
            
            val=parseInt($('#la_hidden').val());
            periode=parseInt($("#sliderMonth").text());
            price=parseInt($("#sliderPrice").text());

            var interestFee = (<?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['interest'];}else{echo '1';}?>/100)*val*periode;
            total_repayable = interestFee + val;
            
            new_interestfee=addCommas(interestFee);
            new_total_repayable=addCommas(total_repayable);
            
            var now = new Date(); 
            now.setDate(now.getDate() + parseInt(periode));

            new_date=$.datepicker.formatDate("dd MM yy",now);
            new_dates=$.datepicker.formatDate("y-m-d",now);
                        // console.log(new_date);
            
            $("#due_date").text(new_date);

            $("#interest").text(new_interestfee );
            $('#repayable').text(new_total_repayable );

            //set value loan
            $("#interest_fee").val(interestFee);
            $("#repay").val(total_repayable);
            $("#length").val(periode);
            $("#due").val(new_dates);


        }
        $(document).ready(function(){
            $("#sliderPrice").slider({
                min: <?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['min_amount'];}else{echo '1';}?>, 
                max: <?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['max_amount'];}else{echo '1';}?>, 
                value: <?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['min_amount'];}else{echo '1';}?>, 
                step: 100000 
            }).slider("float",{
                prefix: "Rp&nbsp;",
                suffix: ",-"
            }).on("slidechange", function( e, ui ) {
                
                setTimeout(function() {
                    var val = ui.value
                    $("span.info.price, #loan_amount").html(addCommas(val));
                    $('#la_hidden').val(val);
                    calculate_loan();
                }, 200 );
                    
            });
            
            $("#sliderMonth").slider({
                min: <?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['min_period'];}else{echo '1';}?>, 
                max: <?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['max_period'];}else{echo '1';}?>, 
                value: <?php if($this->uri->segment('1')=='home' || $this->uri->segment(1)==''){echo $data['min_period'];}else{echo '1';}?>, 
                step: 1 
            }).slider("float",{
                suffix: "&nbsp;Hari"
            }).on("slidechange", function( e, ui ) {
            
            setTimeout(function() {
                var valDay = ui.value
                $("span.info.month").html(valDay +' Hari');
                periode = parseInt(valDay);
                $("#periode_hidden").val(periode);
                calculate_loan();
                }, 200 );
            });
        });
        $(window).bind('load', function(){
        });
        $(document).ready(function(e) {
            
            calculate_loan();

        });

</script>
<?php } ?>
</body>
</html>

