<?php require_once 'header.php';
$page = explode('/',$_SERVER['PHP_SELF']);
$page = end($page);
?>
<?php
use App\classes\UserLogin;
$name = $_SESSION['username'];
$userData = UserLogin::loginUserData("$name");
?>

<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="card">
            <div class="user-heading round">
                <a href="">
                    <img src="../uploads/<?= $userData['image']?>" alt="">
                </a>
                <h1><?= $userData['fname'] . $userData['lname'] ?></h1>
                <p><?= $userData['email'] ?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active nav-item"><a class="nav-link" href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="editprofile.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="card">
            <div class="bio-graph-heading">
                <?= $userData['bio'] ?>
            </div>
            <div class="card-body bio-graph-info">
                <h1>admin profile information</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>First Name </span>: <?= $userData['fname'] ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Last Name </span>: <?= $userData['lname'] ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Country </span>: Ethiopia</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Join Date</span>: <?= $userData['date'] ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Role </span>:
                            <?php
                            if($userData['role'] == 1){
                                echo 'Admin';
                            }else{
                                echo 'Editor';
                            }
                            ?>
                        </p>
                    </div>
                    <div class="bio-row">
                        <p><span>Email </span>: <?= $userData['email'] ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Mobile </span>: 09-12-51-00-04</p>
                    </div>
                    <div class="bio-row">
                        <p><span>Username </span>:  <?= $userData['username'] ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="bio-chart">
                                <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background: none; font: bold 20px Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="bio-desk">
                                <h4 class="red">kin ideas Website</h4>
                                <p>developed by : marshet</p>
                                <p>date: 7/1 /2014 E.C</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="bio-chart">
                                <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background: none; font: bold 20px Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; appearance: none;"></div>
                            </div>
                            <div class="bio-desk">
                                <h4 class="terques">view the website </h4>
                                <p> <a class=" btn-info" href="../post.php">View postes on the website</a></p>
                                <p><a class="btn btn-info" href="addpost.php"> Add post</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>
<?php require_once 'footer.php'?>
