<?php

if(!function_exists("format_print")) {
    function format_print(...$v) {
        $len = count($v);
        foreach($v as $k=>$argv){
            printf("args %d => %s\n",$k,$argv);
        }
    }
}