<?php require_once 'header.php';
use App\classes\Session;
if (isset($_POST['msg-btn'])) {
    $ob = new \App\classes\Mail();
    $ob->sendMail($_POST);
}
?>


        <div class="row text-center bg-info col-md-12" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><i class="fa fa-envelope-open-o bg-orange"></i> Contact us </h1>
                <strong class="hidden-xs-down hidden-sm-down">feel free to call at 0911510004. </strong>
            </div><!-- end col -->
            
       
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
                            <h2 class="bg-info">Contact message</h2>
                            <span style="color: #0b2e13"><?= Session::get("succesMail") ?></span>
                            <span style="color: red"><?= Session::get("failMail") ?></span>
                            <form class="form-wrapper" action="" method="post" >
                                <div class="form-group">
                                    <input type="text" required class="form-control" placeholder="Your name" name="name" style="margin-bottom: 0px;">
                                    <span style="margin: 0px;color: red"><?= Session::get("emptyName") ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email address" name="email" style="margin-bottom: 0px;">
                               <span style="margin: 0px;color: red"><?= Session::get("emptyEmail")?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" style="margin-bottom: 0px;">
                                    <span style="margin: 0px;color: red"><?= Session::get("emptyPhone") ?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" style="margin-bottom: 0px;">
                                    <span style="margin: 0px;color: red"><?= Session::get("emptySubject") ?></span>
                                </div>
                                <textarea class="form-control" placeholder="Your message" name="message" ></textarea>
                                <span style="margin: 0px;color: red"><?= Session::get("emptymsg") ?></span>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="msg-btn">Send  message<i class="fa fa-envelope-open-o"></i></button>
                                </div>

                            </form>
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
