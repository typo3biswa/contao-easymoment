<?php
/*
# @Author: Andreas Prietzel <andreasprietzel>
# @Date:   2018-09-11T10:34:04+02:00
# @Filename: tl_content.php
# @Last modified by:   andreasprietzel
# @Last modified time: 2018-09-12T07:35:17+02:00
*/


// dca/tl_content.php
/**
 * Table tl_content
 */
$strName = 'tl_content';

$GLOBALS['TL_DCA'][$strName]['palettes']['EasyInfoBoxes'] = '{type_legend},type,headline,addImage,url,linkTitle;{Inhalt},text;{Stichpunkte},listitems;{template_legend:hide},customTpl;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
