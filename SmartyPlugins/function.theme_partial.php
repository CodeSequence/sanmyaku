<?php if (!defined('APPLICATION')) {
    exit();
}
/**
 * find the right file
 * @param  string $dir  dir to search
 * @param  string $key  selected theme option
 * @param  string $name partial to search for
 * @return mixed
 */
function resolvePartial($dir, $key, $name)
{
    $themePartial = $dir.$key.'/'.$name.'.php';
    $defaultPartial = $dir.$name.'.php';
    if (file_exists($themePartial)) {
        return $themePartial;
    }
    if (file_exists($defaultPartial)) {
        return $defaultPartial;
    }
    return false;
}
/**
 * handle ags footer format
 * @param  array  $params options
 * @param  object $Smarty Smarty Instance
 * @return string
 */
function smarty_function_theme_partial($params, &$Smarty)
{
    $name = ArrayValue('name', $params);
    $theme_option = c('Garden.ThemeOptions.Styles.Value', '%s_foundation');
    $key = preg_replace('{%s_}', '', $theme_option);
    $dir = rtrim($Smarty->template_dir, '/').'/theme_partials/';
    $filename = resolvePartial($dir, $key, $name);
    // check if file exist
    if ($filename == false) {
        return '<!-- No matching template found -->';
    }
    // return included file as string
    ob_start();
    include($filename);
    $footer = ob_get_contents();
    ob_end_clean();
    return $footer;
}
