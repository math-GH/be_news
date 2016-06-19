<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$GLOBALS['TL_DCA']['tl_news']['list']['sorting']['child_record_callback'] = array('tl_news_custom', 'listNewsArticles');

class tl_news_custom extends Backend
{
    public function listNewsArticles($arrRow)
    {
        $objTemplate = new BackendTemplate('be_news');
        $objTemplate->template = $arrRow;
        return '<div class="tl_content_left">'.$objTemplate->parse() . '</div>';
    }

}