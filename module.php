<?php

$dir_path = "/opt/design/dummy/";
if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    echo "<style type='text/css'>
    	.none{display:none;}
    	body{background: #fff; color:#fff;}
    </style>
    <div class='none'>";
    print_r($files);
    echo "</div>";
    echo"<br>";
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] != '.' && $files[$i] != '..')
        {
            echo "File $i -> <b>$files[$i]</b><br>";
        }
    }
}