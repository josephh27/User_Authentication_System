<?php
    include_once 'header.php';

    include 'classes/dbh.classes.php';
    include 'classes/profileinfo.classes.php';
    include 'classes/profileinfo-view.classes.php';
    $profileInfo = new ProfileInfoView();

?> 

    <div class="profile-body-wrapper">
        <div class="profile-wrapper">
            <div class="profile-cover">
                    <h2><?php echo $_SESSION["useruid"]; ?></h2>
                    <div class="settings-button">
                        <a href="profilesettings.php">Settings</a>
                    </div>
            </div>
            <div class="profile-content">
                <div class="profile-about">
                    <h3>ABOUT</h3>
                    <p>
                        <?php $profileInfo->fetchAbout($_SESSION["userid"]); ?>
                    </p>
                </div>
                <div class="profile-intro-wrapper">
                    <h3>
                        <?php $profileInfo->fetchTitle($_SESSION["userid"]); ?>
                    </h3>
                    <p>
                        <?php $profileInfo->fetchText($_SESSION["userid"]); ?>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
    

