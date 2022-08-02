<?php 
    $text = get_sub_field('text');
    //$form = get_sub_field('form');
?>
<section class="formBlock">
    <?php if($text): ?>
        <div class="formBlock__text content-block">
            <?php echo $text; ?>
        </div>
    <?php endif; ?>
    <div class="separator"></div>
    <div class="formBlock__wrapper">
        <form action="">
            <div class="input-wrapper">
                <div class="input-title">Title</div>
                <select name="" id="">
                    <option value="" selected disabled>Select</option>
                    <option value="">Title 1</option>
                    <option value="">Title 2</option>
                </select>
            </div>
            <div class="input-wrapper">
                <div class="input-title">First Name</div>
                <input type="text">
            </div>
            <div class="input-wrapper">
                <div class="input-title">Surname</div>
                <input type="text">
            </div>
            <div class="input-wrapper">
                <div class="input-title">School</div>
                <input type="text">
            </div>
            <div class="input-wrapper">
                <div class="input-title">Email Address</div>
                <input type="text">
            </div>
            <div class="input-wrapper">
                <div class="input-title">Enquiry</div>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form_button_wrapper"><input type="submit" value="Submit"></div>
        </form>
    </div>
</section>