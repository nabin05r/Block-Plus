<?php

function bp_sign_up_cb($attr){
    $showAuth = $attr['showAuth'];
 
    ob_start();

    ?>
        <div class="wp-block-block-plus-sign-up">
        <?php if($showAuth){?>
            <a class="signin-link open-modal" href="#">
            <div class="signin-icon">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="signin-text">
                <small>Hello, Sign in</small>
                My Account
            </div>
            </a>
            
           <?php }?>
        </div>   
    <?php
 
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}