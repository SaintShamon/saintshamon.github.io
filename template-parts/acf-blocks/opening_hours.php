<?php 
    $content = get_sub_field('content');
    if(have_rows('schedule')):
?>
<section class="content_table">
    <div class="container">
        <div class="main_block">
            <?php if($content): ?>
                <div class="col content_table__content">
                    <div class="inner_block content-block">
                        <?php echo $content; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col content_table__table text--size--22">
                <table>
                    <?php while(have_rows('schedule')): the_row(); ?>
                        <?php 
                            $day = get_sub_field('day');
                            $opening = get_sub_field('opening_hours');
                            $closing = get_sub_field('closing_hours');

                        ?>
                        <tr>
                            <?php if($day): ?>
                                <td><?php echo $day; ?></td>
                            <?php endif; ?>
                            <?php if($opening): ?>
                                <td><?php echo $opening; ?></td>
                            <?php endif; ?>
                            <?php if($closing): ?>
                                <td><?php echo $closing; ?></td>
                            <?php endif; ?>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>