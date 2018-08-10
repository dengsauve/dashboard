<?php
$env_str = file_get_contents('.env');
$env_arr = explode("\n", $env_str);

foreach($env_arr as $envpair)
{
    putenv($envpair);
}

?>
