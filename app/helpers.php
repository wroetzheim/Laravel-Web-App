<?php

//globally added helper file.
//registered in composer.json - autoload - files.

//flash a message t
function flash($message, $level = 'info')
{
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}
