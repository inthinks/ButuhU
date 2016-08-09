<section>
            <div class="titleWrapper">
                <div class="titleBox">
                    <div class="titleContent">
                        Customer Page
                    </div>
                    <div class="titleDesc">
                        Wellcome to Butuh Uang
                    </div>
                </div>
            </div>
            <div class="dashboardWrapper">
                <div class="dashboardBox">
                    <div class="dashboardImage">
                        <img src="<?php echo base_url();?>templates/images/logo.png">
                    </div>
                    <div class="dashboardInfo">
                        <h3><?php echo $this->session->userdata('user_username') ?></h3>
                        
                    </div>
                </div>
                <em><font color="red"><?php echo $this->session->flashdata('alert'); ?></font></em>
                <div class="historyLoanBox">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Date</th>
                                <th>Your Loan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($lists as $list) { ?>
                            <tr>
                                <td><?php echo $no?></td>
                                <td><?php echo $list['created_date']?></td>
                                <td><?php echo 'Rp. ' . number_format( $list['loan_amount'], 0 , '' , '.' ) . ',-';?></td>
                                <td><?php if($list['loan_status']==0) {echo "Pending";} else {echo 'Rejected';}?></td>
                            </tr>

                            <?php $no++;} ?>
                        </tbody>
                    </table>
                </div>
                <div class="buttonWrapper">
                    <!-- <a href="#" class="defBtn prevBtn">Apply Loan</a>
                    <a href="javascript:void(0);" class="defBtn nextBtn" onClick="show_popup_delete();">Decline Page</a> -->
                </div>
            </div>
        </section>