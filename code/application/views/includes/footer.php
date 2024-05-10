
        <footer>            

<section class="footer-widget-area footer-widget-area-bg">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="about-footer">

                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <img src="<?php echo base_url('/') ?>tools/images/logo-footer.png" alt="" />
                        </div> <!--  end col-lg-3-->

                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <p>
                                We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                            </p>
                        </div> <!--  end .col-lg-9  -->

                    </div> <!--  end .row -->

                </div> <!--  end .about-footer  -->

            </div> <!--  end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="footer-widget">

                    <div class="sidebar-widget-wrapper">

                        <div class="footer-widget-header clearfix">
                            <h3>Contact Us</h3>
                        </div>  <!--  end .footer-widget-header --> 


                        <div class="textwidget">                                       

                            <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">support@donation.com</a><br/><a href="#">helpme@donation.com</a></p>

                            <i class="fa fa-location-arrow fa-contact"></i> <p>Road-2,3/A East Indore<br/>Sylhet-3100, India</p>

                            <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+91) 0823 560 433<br/>Cell:&nbsp; (+91) 0723 161 343</p>                              

                        </div>

                    </div> <!-- end .footer-widget-wrapper  -->

                    </div> <!--  end .footer-widget  -->

            </div> <!--  end .col-md-4 col-sm-12 -->   						                      

            <div class="col-md-4 col-sm-6 col-xs-12">



            </div> <!--  end .col-md-4 col-sm-12 -->   

            <div class="col-md-4 col-sm-12 col-xs-12">
            </div> <!--  end .col-md-4 col-sm-12 -->    

        </div> <!-- end row  -->

    </div> <!-- end .container  -->

</section> <!--  end .footer-widget-area  -->
<!--FOOTER CONTENT  -->

   <section class="footer-contents">

<div class="container">

    <div class="row clearfix">

        <div class="col-md-6 col-sm-12">
            <p class="copyright-text"> Copyright © 2017, All Right Reserved - Blood Bank Management System </p>

        </div>  <!-- end .col-sm-6  -->

        <div class="col-md-6 col-sm-12 text-right">
            <div class="footer-nav">
               
            </div> <!--  end .footer-nav  -->
        </div> <!--  end .col-lg-6  -->

    </div> <!-- end .row  -->                                    

</div> <!--  end .container  -->

</section> <!--  end .footer-content  -->

</footer>

<!-- END FOOTER  -->

<!-- Back To Top Button  -->

<a id="backTop">Back To Top</a>

<script src="<?php echo base_url('/') ?>tools/js/jquery.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/wow.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/jquery.backTop.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/waypoints.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/waypoints-sticky.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/venobox.min.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/custom-scripts.js"></script>
<script src="<?php echo base_url('/') ?>tools/js/jquery-3.6.0.min.js"></script>
<script>
$(document).on('submit','.database_operation_form',function(){
var url=$(this).attr('action');
var data=new FormData($(this)[0]);
$.ajax({
type:'POST',
url:url,
data:data,
contentType:false,
processData:false,
success:function(fb)
{
    var resp=$.parseJSON(fb);
    if(resp.status=='true')
    {
        alert(resp.message);
        if(resp.reload!=0) {
            window.location.href=resp.reload;
        }
    }
    else
    {
        alert(resp.message);
    }
}


});
return false;
});
</script>
</body>

</html>