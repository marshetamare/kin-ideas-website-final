
</section>
</section>
<!--main content end-->

<!-- Right Slidebar start -->
<div class="sb-slidebar sb-right sb-style-overlay">
    <h5 class="side-title"> contact kin ideas developer</h5>
    <ul class="quick-chat-list">
        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/mar.jpg" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <strong>Marshet amare</strong>
                    <small>front end developer</small>
                    <div class="bg-success text-red " >
                    <a  class="text-red" href="https://telegram.me/SaintMaryson"><h6> Contact on Telegram</h6></a>
                   
                    </div>
                    <div class="bg-danger">
                  
                    <p><a href="mailto:marshetamare67@gmail.com"> <h6>contact on Email<h6></a></p>
                    </div>
                   
                </div>
            </div><!-- media -->
        </li>
        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/chat" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <strong>fikr </strong>
                    <small>front end developer</small>
                    <div class="bg-success text-red " >
                    <a  class="text-red" href="https://telegram.me/SaintMaryson"><h6> Contact on Telegram</h6></a>
                   
                    </div>
                    <div class="bg-danger">
                  
                    <p><a href="mailto:marshetamare67@gmail.com"> <h6>contact on Email<h6></a></p>
                    </div>
                   
                </div>
            </div><!-- media -->
        </li>

        <li class="online">
            <div class="media">
                <a href="#" class="">
                    <img alt="" src="img/pro-ac-1.png" class="mr-3 rounded-circle">
                </a>
                <div class="media-body">
                    <strong>abrham </strong>
                    <small>front end developer</small>
                    <div class="bg-success text-red " >
                    <a  class="text-red" href="https://telegram.me/SaintMaryson"><h6> Contact on Telegram</h6></a>
                   
                    </div>
                    <div class="bg-danger">
                  
                    <p><a href="mailto:marshetamare67@gmail.com"> <h6>contact on Email<h6></a></p>
                    </div>
                   
                </div>
            </div><!-- media -->
        </li>
       
        
    </ul>
    <h5 class="side-title"> pending Task</h5>
    <ul class="p-task tasks-bar">
        <li>
            <a href="#">
                <div class="task-info">
                    <div class="desc">Dashboard v1.3</div>
                    <div class="percent">40%</div>
                </div>
                <div class="progress">
                    <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-striped bg-success">
                        <span class="sr-only">40% Complete (success)</span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                </div>
                <div class="progress">
                    <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped bg-warning">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
            </a>
        </li>
     
       
        <li>
            <a href="#">
                <div class="task-info">
                    <div class="desc">Dashboard v1.3</div>
                    <div class="percent">45%</div>
                </div>
                <div class="progress">
                    <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-striped">
                        <span class="sr-only">45% Complete</span>
                    </div>
                </div>

            </a>
        </li>
        <li class="external">
            <a href="#">See All Tasks</a>
        </li>
    </ul>
</div>
<!-- Right Slidebar end -->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2022&copy; Developed by KIN IDEAS DEVELOPERS
        <a href="" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>
<!--dynamic table initialization -->
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/dynamic_table_init.js"></script>
<!--common script for all pages-->
<script src="js/common-scripts5e1f.js?v=2"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.php"></script>
<!--summernote-->
<script src="assets/summernote/dist/summernote.min.js"></script>
<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>
<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

</script>
</body>
</html>
