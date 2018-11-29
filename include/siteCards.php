<?php

// Will need card link, title, and body text

$j_str = file_get_contents('sites.json');// Getting JSON file
$json = json_decode($j_str, true);// Decode
$sites = $json['sites'];

$sorted_sites = usort($sites,function($a,$b) {
    return strnatcasecmp($a['name'],$b['name']);
});

echo '<div class="row">
    <!-- Button trigger modal -->
        <div class="col-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Site
        </button>
    </div>
</div>
<br/>';


echo '<div class="row">';

foreach($sites as $key=>$site){
    echo "<div class='col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 tile-container'>\n";
    echo "\t<div class='tile'>\n";
    echo "\t\t<a href='" . htmlspecialchars($site['site'], ENT_QUOTES) . "' target='_blank' title='" . htmlspecialchars($site['description'], ENT_QUOTES) . "' data-toggle='tooltip' data-placement='top'>\n";
    echo "\t\t\t<div class='tile-img'>\n";
    echo "\t\t\t\t<img src='" . $site['image'] . "' onerror='this.style.display=\"none\"' />\n";
    echo "\t\t\t</div>\n";
    echo "\t\t\t<div class='tile-title'>\n";
    echo "\t\t\t\t<p class='h5'>" . $site['name'] . "</p>\n";
    echo "\t\t\t</div>\n";
    echo "\t\t</a>\n";
    echo "\t</div>\n";
    echo "</div>\n";
}

echo '</div>';
