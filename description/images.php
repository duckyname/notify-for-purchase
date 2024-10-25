<?php
// Tutorial Page for the Notify for New Purchase Plugin
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<h2>Images</h2>
<p>Here are some images showing the plugin in action:</p>

<div class="slider">
    <div class="slide">
        <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'assets/screenshot-settings.png'); ?>" alt="Image 1" style="max-width:100%; height:auto;">
    </div>
    <div class="slide">
        <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'assets/screenshot-telegram.png'); ?>" alt="Image 2" style="max-width:100%; height:auto;">
    </div>
    <div class="slide">
        <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'assets/screenshot-donate.png'); ?>" alt="Image 3" style="max-width:100%; height:auto;">
    </div>
</div>

<button class="prev" onclick="changeSlide(-1)">&#10094;</button>
<button class="next" onclick="changeSlide(1)">&#10095;</button>
