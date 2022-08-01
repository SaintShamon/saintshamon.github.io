<?php
//Include function files in functions folder
$dir = scandir(get_template_directory() . '/functions');
foreach($dir as $file):
    if(preg_match('/\\.php$/', $file) ):
        $file = "functions/{$file}";
        locate_template($file, true, true);
    endif;
endforeach;
?>