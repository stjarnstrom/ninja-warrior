<?php
/**
 * Theme Settings for Ninja Warrior
 *
 * @package Ninja Warrior
 */

function setup_theme_admin_menus() {
    add_submenu_page(
        'options-general.php', 
        'Google Analytics', 
        'Analytics', 
        'manage_options', 
        'site-settings', 
        'site_settings'); 
}

add_action("admin_menu", "setup_theme_admin_menus");

function site_settings() {

  if (isset($_POST["update_settings"])) {
    $google_analytics = esc_attr($_POST["google_analytics"]);   
    update_option("ninja_warrior_google_analytics", $google_analytics);
    
    ?><div id="message" class="updated">Settings saved</div><?php
      
  } else { 
      $google_analytics = get_option("ninja_warrior_google_analytics");
  }
      
?>
    <div class="wrap">
        <?php screen_icon('themes'); ?> <h2>Google Analytics</h2>
 
        <form method="POST" action="">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">
                        <label for="num_elements">
                            Tracking Code
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="google_analytics" value="<?php echo $google_analytics;?>" size="25" placeholder="UA-XXXXX-X" />
                        <input type="hidden" name="update_settings" value="Y" />
                        
                        <p>
                            <br>
                            <input type="submit" value="Save settings" class="button-primary"/>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
<?php
}

