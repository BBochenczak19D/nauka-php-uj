<?php
/**
 * Templates support.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 */

/**
 * Render view.
 *
 * @param array  $view   View data
 * @param string $layout Layout file name
 */
function render($view, $layout = 'base') {
    $view['templates_dir'] = __DIR__ . '/../templates';
    $view['template_ext'] = '.html.php';

    $layout_template_name = $layout.$view['template_ext'];
    extract($view);

    require_once $view['templates_dir'] . '/' . $layout_template_name;
}