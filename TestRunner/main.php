<?php

$parentDirectory = dirname(dirname(__FILE__ ));

includePhpFilesInDirectoryAndSubDirectories($parentDirectory);
TestRunner::runTests();




function includePhpFilesInDirectoryAndSubDirectories($directory){
    includeAllPhpFilesInDirectory($directory);

    $subDirectories = getSubDirectories($directory);

    foreach ($subDirectories as $subDirectory)
            includePhpFilesInDirectoryAndSubDirectories($subDirectory);
}
function getSubDirectories($directory)
{
    return array_filter(glob($directory."\*"), 'is_dir');
}

function includeAllPhpFilesInDirectory($directory)
{
    foreach (glob("$directory/*.php") as $filename)
        require_once $filename;
}



