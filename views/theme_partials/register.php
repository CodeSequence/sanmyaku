<?php
/**
 * determine if a register link is needed
 * @return string
 */
function agsRegisterLink()
{
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

echo agsRegisterLink();
