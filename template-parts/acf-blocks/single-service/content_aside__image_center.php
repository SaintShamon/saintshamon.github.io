<?php 
    $left_title = get_sub_field('left_title');
    $left_text = get_sub_field('left_text');
    $right_title = get_sub_field('right_title');
    $right_text = get_sub_field('right_text');
    $image = get_sub_field('image');
    $button = get_sub_field('button');
?>
<section class="three_col_center_img section<?php if($button){echo ' with_button';} ?>">
    <div class="container">
        <div class="section-bg"></div>
        <div class="main_block">
            <?php if($left_title || $left_text): ?>
                <div class="col content_block">
                    <?php if($left_title): ?><h2><?php echo $left_title; ?></h2><?php endif; ?>
                    <?php if($left_text): ?>
                        <?php echo $left_text; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if($image): ?>
                <div class="col center_img">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endif; ?>
            <?php if($right_title || $right_text || $button): ?>
                <div class="col content_block">
                    <?php if($button): ?>
                        <a href="<?php echo $button['url']; ?>" class="button button--pdf">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="white" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.01709 0H9.44936L13.9831 4.72564V16H2.01709V0Z" fill="white" />
                                <path opacity="0.302" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.44531 0V4.68966H13.983L9.44531 0Z" fill="#5A5A5A" />
                                <path class="blue"
                                    d="M4.33203 11.938V9.0155H5.57541C5.88326 9.0155 6.12715 9.09946 6.31105 9.27138C6.49496 9.43929 6.58692 9.66718 6.58692 9.95104C6.58692 10.2349 6.49496 10.4628 6.31105 10.6307C6.12715 10.8026 5.88326 10.8866 5.57541 10.8866H5.07966V11.938H4.33203ZM5.07966 10.2509H5.49146C5.60339 10.2509 5.69135 10.2269 5.75133 10.1709C5.81129 10.119 5.8433 10.047 5.8433 9.95106C5.8433 9.85511 5.81131 9.78314 5.75133 9.73117C5.69137 9.67519 5.60341 9.65121 5.49146 9.65121H5.07966V10.2509ZM6.89475 11.938V9.0155H7.93023C8.13413 9.0155 8.32604 9.04348 8.50594 9.10346C8.68584 9.16342 8.84977 9.2474 8.99369 9.36334C9.13763 9.47527 9.25357 9.6272 9.33752 9.81911C9.41748 10.011 9.46147 10.2309 9.46147 10.4788C9.46147 10.7227 9.4175 10.9425 9.33752 11.1344C9.25357 11.3263 9.13763 11.4783 8.99369 11.5902C8.84975 11.7061 8.68584 11.7901 8.50594 11.8501C8.32604 11.91 8.13413 11.938 7.93023 11.938H6.89475ZM7.62638 11.3024H7.84227C7.95821 11.3024 8.06616 11.2904 8.16611 11.2624C8.26205 11.2344 8.35402 11.1904 8.44198 11.1305C8.52593 11.0705 8.5939 10.9865 8.64187 10.8746C8.68984 10.7626 8.71384 10.6307 8.71384 10.4788C8.71384 10.3228 8.68984 10.1909 8.64187 10.079C8.5939 9.96705 8.52593 9.88309 8.44198 9.82311C8.35402 9.76315 8.26207 9.71916 8.16611 9.69118C8.06616 9.6632 7.95821 9.65119 7.84227 9.65119H7.62638V11.3024ZM9.83728 11.938V9.0155H11.9163V9.65119H10.5849V10.1189H11.6484V10.7506H10.5849V11.938H9.83728Z"
                                    fill="#0C6F97" />
                            </svg>
                            <?php echo $button['title']; ?>
                        </a>
                    <?php endif; ?>
                    <?php if($right_title): ?><h3><?php echo $right_title; ?></h3><?php endif; ?>
                    <?php if($right_text): ?>
                        <?php echo $right_text; ?>
                    <?php endif;  ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>