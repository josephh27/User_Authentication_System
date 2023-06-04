<?php
    include_once 'header.php';

    include 'classes/dbh.classes.php';
    include 'classes/profileinfo.classes.php';
    include 'classes/profileinfo-view.classes.php';
    $profileInfo = new ProfileInfoView();
?> 


<div class="profile-body-wrapper">
    <div class="profile-wrapper">
        <div class="profile-settings">
            <h3>PROFILE SETTINGS</h3>
            <p>Change your about section here!</p>
            <form action="includes/profileinfo.inc.php" method="post" class="profile-settings-form">
                <textarea name="about" cols="30" rows="10" placeholder="Profile about section..."><?php $profileInfo->fetchAbout($_SESSION["userid"]); ?></textarea>
                <p>Change your profile page intro here!</p>
                <input type="text" name="introtitle" placeholder="Profile title..." 
                value="<?php $profileInfo->fetchTitle($_SESSION["userid"]); ?>">

                <textarea name="introtext" cols="30" rows="10" placeholder="Profile introduction..."><?php $profileInfo->fetchText($_SESSION["userid"]); ?></textarea>
                <button type="submit" name="submit">
            </form>

        </div>
    </div>
</div>
    
</html>