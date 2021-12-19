<?php

function change($content, $array){
    $keys = array_keys($array);
    foreach($keys as $key){
        $content = str_replace($key, '$'.md5($key).'$', $content);
    }
    foreach($array as $key=>$val){
        $content = str_replace('$'.md5($key).'$', $val, $content);
    }
    return $content;
}

function convert($home){

    $dir = new DirectoryIterator($home);
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            if($fileinfo->isDir()){
                convert($home . '/' . $fileinfo->getFilename());
            }else {
                if($fileinfo->getExtension() == 'less'){
                    $content = file_get_contents($home . '/' . $fileinfo->getFilename());
                    $content = change($content, array(
                        'left' => 'right',
                        'right' => 'left'
                    ));
                    file_put_contents($home . '/' . $fileinfo->getFilename(), $content);
                }
            }
        }
    }

}

$home = dirname(__FILE__);
convert($home . '/less');
