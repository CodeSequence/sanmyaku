<?php if (!defined('APPLICATION')) {
    exit();
}

/**
 * return small one line code pieces based on template
 * @param  array  $params options
 * @param  object $Smarty Smarty Instance
 * @return string
 */
function smarty_function_theme_asset($params, &$Smarty)
{
    $asset = ArrayValue('asset', $params);
    die(__DIR__);
}
