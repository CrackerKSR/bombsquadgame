<?php $title = 'Download Servers'; ?>
<?php include 'inc/header.php' ?>



<div class="flex-container">
    <div class="flex-item">
        <div class="card win-s">
            <div class="img"> </div>
            <div class="card-header">

            </div>
            <div class="card-middle">
                <h3> Windows Server </h3>
            </div>

            <div class="card-footer">
                <a href="<?php echo $download_link['windows_server']; ?>">
                    <div class="download-btn"> </div>
                    <span class="download-text"> <i class="fa fa-windows"></i> Download</span>
                </a>
            </div>

        </div>
    </div>




    <div class="flex-item">
        <div class="card mac-s">
            <div class="img"> </div>
            <div class="card-header">

            </div>
            <div class="card-middle">
                <h3>MAC Server</h3>
            </div>
            <div class="card-footer">
                <a href="<?php echo $download_link['mac_server']; ?>">
                    <div class="download-btn"> </div>
                    <span class="download-text"><i class="fa fa-apple"></i> Download</span>
                </a>
            </div>
        </div>
    </div>

    <div class="flex-item">
        <div class="card linux-s">
            <div class="img"> </div>
            <div class="card-header">

            </div>
            <div class="card-middle">
                <h3>Linux Server</h3>

                <p>
                    <small> <a href="<?php echo $download_link['linux32_server']; ?>" style="color: white;"> Click here for Linux 32 </a></small>
                </p>
            </div>
            <div class="card-footer">
                <a href="<?php echo $download_link['linux64_server']; ?>">
                    <div class="download-btn"> </div>
                    <span class="download-text"><i class="fa fa-linux"></i> Download</span>
                </a>
            </div>
        </div>
    </div>



    <div class="flex-item">
        <div class="card pi-s">
            <div class="img"> </div>
            <div class="card-header">

            </div>
            <div class="card-middle">
                <h3>raspberry-Pi server </h3>
            </div>
            <div class="card-footer">
                <a href="<?php echo $download_link['raspberryPi_server']; ?>">
                    <div class="download-btn"> </div>
                    <span class="download-text"><i class="fa fa-android"></i> Download</span>
                </a>
            </div>
        </div>
    </div>

</div>



<?php include 'inc/footer.php' ?>