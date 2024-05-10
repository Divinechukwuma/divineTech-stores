<?php 

function dd($path){
    echo "<pre>";

    var_dump ($path);

    echo "</pre>";

    die();
}

function base_path($path){

  return   BASE_PATH . $path;

}

function view($path)
{
    return base_path('build/view/' . $path);
}