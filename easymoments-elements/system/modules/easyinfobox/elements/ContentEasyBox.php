<?php

/**
 * Contao Open Source CMS
 *
 * simple extension to provide a share buttons module
 * 
 * @copyright inspiredminds 2014-2019
 * @package   sharebuttons
 * @link      http://www.inspiredminds.at
 * @author    Fritz Michael Gschwantner <fmg@inspiredminds.at>
 * @license   LGPL-3.0-or-later
 */

use Contao\ContentElement;
use Contao\Backend;
use Contao\BackendUser;
use Contao\Controller;
use Contao\Config;
use Contao\CoreBundle\Monolog\ContaoContext;
use Contao\Database;
use Contao\DataContainer;
use Contao\FilesModel;
use Symfony\Component\Filesystem\Filesystem;

class ContentShareButtons extends ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_sharebuttons';

    /**
     * Generate module
     */
    protected function compile()
    {
        // show share buttons in backend
        if(ShareButtons::isBackendRequest())
        echo 'bapi';
        // otherwise generate insert tag
        else
          //echo 'sfsdfsfdfd';
        $this->Template->id = $this->id;
        $fileObj = Filesmodel::findById( $this->singleSRC );
        $this->Template->imageSRC = $fileObj->path;
       // var_dump($this->Template);
        $this->Template->backgroundColor = $this->backgroundColor;
        $this->Template->class = $this->class;
        $this->Template->headline = $this->headline;
        //$this->Template->html = $this->html;
        $this->Template->url = $this->url;
        $this->Template->specialoffer = $this->specialoffer;
        $this->Template->specialofferlabel = $this->specialofferlabel;

        
        //if ($size)
        if (!empty($this->imageUrl))
        {
            $this->Template->anchorTagOpen = '<a target="_blank" href="'.$this->imageUrl.'">';
            $this->Template->anchorTagClose = '</a>';
        } else
        {
            $this->Template->anchorTagOpen = '';
            $this->Template->anchorTagClose = '';
        }
        //$this->import("FilesModel");
        
            /*$this->Template->sharebuttons = ShareButtons::createInsertTag($this->sharebuttons_theme, 
                                                                          $this->sharebuttons_template,$this->pid);*/
    }

    public function generate()
    {
        /*// Return if there is no file
        if ($this->singleSRC == '')
        {
            return '';
        }

        $objFile = \FilesModel::findByUuid($this->singleSRC);

        if ($objFile === null)
        {
            if (!\Validator::isUuid($this->singleSRC))
            {
                return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
            }

            return '';
        }

        $allowedDownload = trimsplit(',', strtolower(\Config::get('allowedDownload')));

        // Return if the file type is not allowed
        if (!in_array($objFile->extension, $allowedDownload))
        {
            return '';
        }

        $file = \Input::get('file', true);

        // Send the file to the browser and do not send a 404 header (see #4632)
        if ($file != '' && $file == $objFile->path)
        {
            \Controller::sendFileToBrowser($file);
        }

        $this->singleSRC = $objFile->path;
        */
        return parent::generate();
    }

}
