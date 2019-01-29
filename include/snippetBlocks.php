<?php

$j_str = file_get_contents('data/snippets.json');// Getting JSON file
$json = json_decode($j_str, true);// Decode
$snippets = $json['snippets'];

foreach($snippets as $key=>$snippet)
{
    $name = $snippet['name'];
    $description = $snippet['description'];
    $body = $snippet['body'];
    $language = $snippet['language'];

    echo <<< EOL
    <div class="row">
        <div class="col-12">
            <h3>$name</h3>
            <h3><small>$description</small></h3>
            <pre><code class="language-$language">$body</code></pre>
        </div>
    </div>
EOL;
}
            
?>