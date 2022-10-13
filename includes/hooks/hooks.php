<?php

// !defined('ABSPATH') || exit;

add_action('template_redirect','wp_announcement');

 function wp_announcement(){
    ?>
        <div style="display: flex; justify-content: center; background: tomato; padding: 15px 30px;" class="wp-announcement-wrapper">
            <div style="color: #000; border-radius: 8px; text-align: center; padding: 8px 16px; background: lightsalmon; width: 60%" class="announcement-text">
                Hurry Up! 30% off for School!
            </div>
        </div>
    <?php
 }