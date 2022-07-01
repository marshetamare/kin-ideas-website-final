<?php require_once 'header.php';
use App\classes\Session;
if (isset($_POST['msg-btn'])) {
    $ob = new \App\classes\Mail();
    $ob->sendMail($_POST);
}
?>


        <div class="row text-center  bg-dark col-md-12" >
        <p class="text-info">kinideas is the first popular ethiopian music streaming institutes.it gives music streaming,podcast streaming and radio broadcasting services through mobail application</p>
                     <div class=" text-center">
                     <h2 class="text-info">please download our application</h2>
                    <img src="uploads/app.jpg" style="width: 200px;height:120px">


                     </div>
       
</div>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                            <h4>Who we are</h4>
                            <p>kinideas is the first popular ethiopian music streaming institutes.it gives music streaming,podcast streaming and radio broadcasting services through mobail application.</p>

                            <h4>How we work?</h4>
                            <p> we register artistes and we stream their music on our app. </p>
                            <p>we promote any Advertising tom our customers</p>
                            <p>we prepare and advice for any music concert all over the world</p>
                            <p>we give data of listeners where they found  for any musicians  this helps to prepare concert </p>
                            <p>we sell NFT </p>

                            <h4>Where we foud?</h4>
                            <p>Ethiopia,Addis Abeba,haya hulet please see Location @<a href="address.php">google map</a></p>
                          
                        </div>
                        <div class="col-lg-7">
                           <img src="uploads/1.png">
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?php
Session::unsetSession("emptyName");
Session::unsetSession("emptyEmail");
Session::unsetSession("emptyPhone");
Session::unsetSession("emptySubject");
Session::unsetSession("succesMail");
Session::unsetSession("failMail");
?>
<?php require_once 'footer.php' ?>
