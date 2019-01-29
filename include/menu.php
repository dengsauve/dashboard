<?php

echo <<<EOL
<div class="row">
<a href="/" class="h1 col-6">Dashboard</a>
<div class="col-6 text-right">
    <a href="/vault.php" class="btn btn-secondary" roll="button">meme vault</a>
    <a href="/tools.php" class="btn btn-secondary" roll="button">tools</a>
    <a href="/snippets.php" class="btn btn-secondary" roll="button">snippets</a>
    <a href="/?logout=true" class="btn btn-secondary" roll="button">logout</a>
</div>
</div>
EOL;

?>