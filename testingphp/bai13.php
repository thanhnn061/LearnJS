<?php
function scanDirs($dir)
{
    global $dirs;
    $cayThuMuc = glob(rtrim($dir, '/') . '/*');
    if (is_array($cayThuMuc)) {
        foreach ($cayThuMuc as $file) {
            if (is_dir($file)) {
                $dirs[] = $file;
                scanDirs($file);
            }
        }
    }
}

$rDir = getcwd() . '/bai13';

scanDirs($rDir);

foreach ($dirs as $dir) {
    $files = glob($dir . '/*.*');
    if (!empty($files)) {
        foreach ($files as $file) {
            $fileContent = file_get_contents($file);
            $a = null;
            $a = preg_match_all('/(Hello)/is', $fileContent, $matches);
            if (!empty($a)) {
                echo $file . '<br>';

            }
        }
    }
}
?>