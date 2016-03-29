<?php
/**
 * Checks if sso is enable and has a register link configured.
 *
 * @param  array  $params options
 * @param  object $Smarty Smarty Instance
 * @return string
 */
function smarty_function_register_link($params, &$Smarty)
{
    //$mobile = val('mobile', $params, '', true);
    $template = '<a href="%url" class="%class">%text</a>';
    if (strcasecmp(c('Garden.Registration.Method'), 'Connect') == 0) {
        $jsconnect = Gdn::SQL()
        ->GetWhere('UserAuthenticationProvider', ['AuthenticationSchemeAlias' => 'jsconnect'])
        ->ResultArray();
        if ($jsconnect && $jsconnect[0]['RegisterUrl'] != null) {
            return Gdn_Theme::Link(
                'register',
                'Register',
                $template,
                ['Target' => $jsconnect[0]['RegisterUrl']]
            );
        }
        if ($jsconnect && $jsconnect[0]['RegisterUrl'] == null) {
            return null;
        }
    }
    return Gdn_Theme::Link(
        'register',
        'Register',
        $template
    );
}
