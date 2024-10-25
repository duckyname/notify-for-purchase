<?php
// Tutorial Page for the Notify for New Purchase Plugin
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// No need for a POST check; the content will display directly
?>

<div class="wrap">
    <img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'assets/header-desc.webp'); ?>" alt="Header Image" style="display: block; margin: 0 auto; max-width: 100%; height: auto;">

    <div style="margin-top: 20px; text-align: center;">
        <h2>Follow these steps to set up your plugin:</h2>
        <ul>
            <li>1. Install and activate the plugin. (You need the WooCommerce plugin installed.)</li>
            <li>2. Invite <strong>@notify_by_duck_bot</strong> to your chat.</li>
            <li>3. Go to the Settings page to configure your Telegram Chat ID. When you click save, you should receive a message in the chat from our bot confirming it's online. <br> <i>(You can watch a video on how to check your chat ID)</i><br><img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'assets/screenshot-active.png'); ?>" alt="Active Bot Screenshot"></li>
            <li>4. Test the setup by making a test purchase.<br><img src="<?php echo esc_url(plugin_dir_url(__FILE__) . 'assets/screenshot-purchase.png'); ?>" alt="Test Purchase Screenshot"></li>
        </ul>

        <h2>How to check the Chat ID of Your Channel/Group</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/4Lf1DWKwK6Y?si=aMRPg7f9qm5U3OJu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
