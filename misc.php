<?php $title = 'THE BOMBSQUAD GAME '; ?>

<?php include 'inc/header.php' ?>
<?php include 'inc/download_links.php' ?>

<div class="flex-container">
    <div class="flex-item">
        <div class="card remote">
            <div class="img"> </div>
            <div class="card-header">

            </div>
            <div class="card-middle">
                <h1> Remote </h1>
            </div>

            <div class="card-footer">
                <a href="<?php echo $download_link['playstore_bs_remote']; ?>" target="_blank">
                    <div class="download-btn"> </div>
                    <span class="download-text">Download</span>
                </a>
            </div>

        </div>
    </div>

    <div class="flex-item">
        <div class="card vr">
            <div class="img"> </div>
            <div class="card-header">

            </div>
            <div class="card-middle">
                <h1> BombSquad VR</h1>
            </div>
            <div class="card-footer">
                <a href="<?php echo $download_link['playstore_bs_vr']; ?>" target="_blank">
                    <div class="download-btn"> </div>
                    <span class="download-text">Download</span>
                </a>
            </div>
        </div>
    </div>

</div>

<?php include 'inc/footer.php' ?>