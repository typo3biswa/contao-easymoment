<?php

/**
 * Contao Open Source CMS
 *
 * simple extension to provide a share buttons module
 * 
 * @copyright inspiredminds 2015-2019
 * @package   sharebuttons
 * @link      http://www.inspiredminds.at
 * @author    Fritz Michael Gschwantner <fmg@inspiredminds.at>
 * @license   LGPL-3.0-or-later
 */


/**
 * Front end modules
 */
//$GLOBALS['FE_MOD']['miscellaneous']['sharebuttons'] = 'ModuleShareButtons';


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['links']['easyinfobox'] = 'ContentEasyBox';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['easyinfobox'][] = array('EasyInfobBox','parseArticles');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('EasyInfobBox','replaceInsertTag');
$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('EasyInfobBox','parseTemplate');
$GLOBALS['TL_HOOKS']['isVisibleElement'][] = array('EasyInfobBox','isVisibleElement');


/**
 * CSS
 */
if (ShareButtons::isBackendRequest()) {
	$GLOBALS['TL_CSS'][] = 'system/modules/easyinfobox/assets/backend.css';
}



$GLOBALS['easyinfobox']['themes'] = array(
	'text'              => array('Text'              ,''),
	'boxxed'            => array('Boxxed'            ,'system/modules/easyinfobox/assets/boxxed/boxxed.css'),
	'boxxed_16'         => array('Boxxed (16px)'     ,'system/modules/easyinfobox/assets/boxxed/boxxed_16.css'),
	'contao'            => array('Contao'            ,'system/modules/easyinfobox/assets/contao.css'),
	'light'             => array('Light'             ,'system/modules/easyinfobox/assets/light/light.css'),
	'shadow'            => array('Shadow'            ,'system/modules/sharebuttons/assets/shadow/shadow.css'),
	'simpleflat'        => array('Simple Flat'       ,'system/modules/easyinfobox/assets/simpleflat/simpleflat.css'),
	'simpleicons_black' => array('Simple Icons Black','system/modules/easyinfobox/assets/simpleicons/simpleicons_black.css'),
	'simpleicons_white' => array('Simple Icons White','system/modules/easyinfobox/assets/simpleicons/simpleicons_white.css'),
	'fontawesome'       => array('Font Awesome'      ,'system/modules/easyinfobox/assets/fontawesome.css')
);
