<?php
/**
 * Created by PhpStorm.
 * User: Sassan
 * Date: 9/5/2018
 * Time: 3:06 PM
 */
function flash($message='',$level='info')
{
    session()->flash('flash_message',$message);
    session()->flash('flash_level_message',$level);
}

