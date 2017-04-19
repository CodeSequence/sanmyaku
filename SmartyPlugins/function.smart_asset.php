<?php
/**
 * Takes the path to an asset file and prepends the web root.
 *
 * @param array $Params The parameters passed into the function. Following parameters are supported:
 *   string      "destination":  The subpath of the asset.
 *   bool|string "withdomain":   Whether or not to include the domain in the final URL.
 *   bool        "addversion":   Whether or not to add a cache-busting version querystring parameter to the URL.
 * @param Smarty $Smarty The smarty object rendering the template.
 *
 * @return string Returns the URL of the asset.
 */
function smarty_function_smart_asset($Params, &$Smarty) {
    return smartAsset(
        val('destination', $Params, ''),
        val('withdomain', $Params, false),
        val('addversion', $Params, false)
    );
}