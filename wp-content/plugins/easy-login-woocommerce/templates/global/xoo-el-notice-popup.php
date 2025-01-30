<?php
/**
 * The template is for handling warnings such as from wordfence
 *
 * This template can be overridden by copying it to yourtheme/templates/easy-login-woocommerce/global/xoo-el-notice-popup.php.
 *
 * HOWEVER, on occasion we will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen.
 * @see     https://docs.xootix.com/easy-login-woocommerce/
 * @version 2.8.5
 */

if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

?>

<div class="xoo-el-popup-notice" style="visibility: hidden;">
    <div class="xoo-el-notice-opac"></div>
    <div class="xoo-el-notice-modal">
        <div class="xoo-el-notice-inmodal">
            <span class="xoo-el-notice-close xoo-el-icon-cross"></span>
            <div class="xoo-el-notice-wrap">
               <iframe></iframe>
               <div class="xoo-el-notice-iframestyle" style="display: none;">
                   body::-webkit-scrollbar {
                        width: 7px;
                    }

                    body::-webkit-scrollbar-track {
                        border-radius: 10px;
                        background: #f0f0f0;
                    }

                    body::-webkit-scrollbar-thumb {
                        border-radius: 50px;
                        background: #dfdbdb
                    }
               </div>
            </div>
        </div>
    </div>
</div>