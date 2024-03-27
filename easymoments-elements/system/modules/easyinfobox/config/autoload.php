<?php

/**
 * Contao Open Source CMS
 *
 * simple extension to provide a share buttons module
 * 
 * @copyright inspiredminds 2014-2019
 * @package   easyinfobox
 * @link      http://www.inspiredminds.at
 * @author    Biswajit Patra <onlinebiswajit@gmail.com>
 * @license   LGPL-3.0-or-later
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	//'ModuleShareButtons'  => 'system/modules/sharebuttons/modules/ModuleShareButtons.php',
	//'ShareButtons'        => 'system/modules/sharebuttons/classes/ShareButtons.php',
	'ContentShareButtons' => 'system/modules/easyinfobox/elements/ContentEasyBox.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_sharebuttons'          => 'system/modules/easyinfobox/templates',
	'mod_sharebuttons'         => 'system/modules/easyinfobox/templates',
	'sharebuttons_default'     => 'system/modules/easyinfobox/templates',
	'sharebuttons_fontawesome' => 'system/modules/easyinfobox/templates'
));
