<?php defined('APPLICATION') or die();
/**
 * Sample implementation of a theme hooks class to show
 * the use of custom Smarty plugins.
 */
class SanmyakuThemeHooks implements Gdn_IPlugin
{
    /**
     * Setup function is needed for this class, so don't delete it!
     *
     * @return bool Dummy return value.
     */
    public function setup()
    {
      // Set some config settings for a table layout & mobile theme
      saveToConfig(array(
          'Vanilla.Discussions.Layout' => 'modern',
          'Vanilla.Categories.Layout' => 'modern',
          'Garden.MobileTheme' => 'sanmyaku'
      ), null, true);
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
        $sender->addPluginsDir(__DIR__.'/SmartyPlugins');
    }
}
