<?php if (!defined('APPLICATION')) {
    exit();
}

/**
 * Render a breadcrumb trail for the user based on the page they are on with foundation style.
 * @param  array   $Data     collection of links
 * @param  boolean $HomeLink show homelink yes or no
 * @param  array   $Options  array of options
 * @return string
 */
function formatBreadcrumbs($Data, $HomeLink = true, $Options = [])
{
    $Format = '<a href="{Url,html}">{Name,html}</a>';

    $Result = '';

    if (!is_array($Data)) {
        $Data = [];
    }


    if ($HomeLink) {
        $HomeUrl = val('HomeUrl', $Options);
        if (!$HomeUrl) {
            $HomeUrl = Url('/', true);
        }

        $Row = ['Name' => $HomeLink, 'Url' => $HomeUrl, 'CssClass' => 'home'];
        if (!is_string($HomeLink)) {
            $Row['Name'] = T('Home');
        }

        array_unshift($Data, $Row);
    }

    if (val('HideLast', $Options)) {
        // Remove the last item off the list.
        array_pop($Data);
    }

    $DefaultRoute = ltrim(val('Destination', Gdn::router()->getRoute('DefaultController'), ''), '/');

    $DataCount = 0;
    $HomeLinkFound = false;

    foreach ($Data as $Row) {
        $DataCount++;

        if ($HomeLinkFound && Gdn::request()->urlCompare($Row['Url'], $DefaultRoute) === 0) {
            continue; // don't show default route twice.
        } else {
            $HomeLinkFound = true;
        }
        $Row['Url'] = ($Row['Url']) ? Url($Row['Url']) : '#';
        $CssClass = val('CssClass', $Row);
        if ($DataCount == count($Data)) {
            $CssClass .= ' current';
        }
        $Result .= '<li class="'.$CssClass.'">'.formatString($Format, $Row).'</li> ';
    }
    $Result = '<nav class="breadcrumbs">'.$Result.'</nav>';

    return $Result;
}
/**
 * smarty function for foundation breadcrumbs
 * @param  array  $Params array of options
 * @param  object $Smarty Smarty Instance
 * @return string
 */
function smarty_function_foundation_breadcrumbs($Params, &$Smarty)
{
    $breadcrumbs = Gdn::controller()->data('Breadcrumbs');
    if (!is_array($breadcrumbs)) {
        $breadcrumbs = [];
    }
    $Options = ArrayTranslate($Params, ['homeurl' => 'HomeUrl', 'hidelast' => 'HideLast']);

    return formatBreadcrumbs($breadcrumbs, GetValue('homelink', $Params, true), $Options);
}
