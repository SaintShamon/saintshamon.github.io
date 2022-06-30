<?php 
    $content = get_sub_field('content');
    if($content):
?>
<section class="text-section section">
    <div class="container">
        <div class="main_block">
            <div class="content-block">
                <?php echo $content; ?>
            </div>
            <div class="bottom_wrap">
                <div class="col">
                    <p>Copyright © <?php echo date("Y"); ?></p>
                </div>
                <div class="col">
                    <p>Michigan Nose & Sinus Health</p>
                </div>
                <div class="col">
                    <p>All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>