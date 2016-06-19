<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$GLOBALS['TL_DCA']['tl_calendar_events']['list']['sorting']['child_record_callback'] = array('tl_calendar_events_custom', 'listEvents');
// https://community.contao.org/de/showthread.php?62843-Event-Liste-im-Backened-anpassen&p=411506#post411506

class tl_calendar_events_custom extends Backend
{
    /**
    * Add the type of input field
    *
    * @param array $arrRow
    *
    * @return string
    */
    public function listEvents($arrRow)
    {
        $objTemplate = new BackendTemplate('be_calendar');
        $objTemplate->template = $arrRow;
        return '<div class="tl_content_left">'.$objTemplate->parse() . '</div>';
        
        
        
    }
}