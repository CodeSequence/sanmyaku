<?php defined('APPLICATION') or die();
/**
 * Sample implementation of a theme hooks class to show
 * the use of custom Smarty plugins.
 */
class MyThemeThemeHooks implements Gdn_IPlugin
{
    /**
     * Setup function is needed for this class, so don't delete it!
     *
     * @return bool Dummy return value.
     */
    public function setup()
    {
        return true;
    }
    /**
     * This function hooks the Smarty init to add our directory
     * containing our custom Smarty functions
     *
     * @param object $sender Smarty object.
     * @return void
     */
    public function gdn_smarty_init_handler($sender)
    {
        // add directory "/themes/MyTheme/SmartyPlugins/"
        $sender->plugins_dir[] = dirname(__FILE__).DS.'SmartyPlugins';
    }
    // whatever...
}
