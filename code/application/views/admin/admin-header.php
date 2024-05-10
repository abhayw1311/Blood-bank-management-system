<br><br>
<div class="row">
    <div class="col-sm-12">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="<?php if($this->uri->segment(2)=='') { ?>active<?php } ?>"><a href="<?php echo base_url('admin/') ?>" >Apponitment Request</a></li>
                    <li class="<?php if($this->uri->segment(2)=='add_donation') { ?>active<?php } ?>"><a href="<?php echo base_url('admin/add_donation') ?>">Add Donation</a></li>
                    <li class="<?php if($this->uri->segment(2)=='donation_list') { ?>active<?php } ?>"><a href="<?php echo base_url('admin/donation_list') ?>">Donation List</a></li>
                    <li class="<?php if($this->uri->segment(2)=='issue_blood') { ?>active<?php } ?>"><a href="<?php echo base_url('admin/issue_blood') ?>">Issue Blood</a></li>
                    <li class="<?php if($this->uri->segment(2)=='issue_blood_list') { ?>active<?php } ?>"><a href="<?php echo base_url('admin/issue_blood_list') ?>">Issue Blood List</a></li>
                </ul>
            </div>
            </nav>
    </div>
</div>