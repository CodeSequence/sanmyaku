<?php if (!defined('APPLICATION')) exit(); ?>
    <div class="SearchForm">
        <?php
        $Form = $this->Form;
        $Form->InputPrefix = '';
        echo $Form->open(array('action' => url('/search'), 'method' => 'get')),
        "<h1>Search Results</h1>",
        $Form->errors(),
        $Form->close();
        ?>
    </div>
<?php
$ViewLocation = $this->fetchViewLocation('results');
include($ViewLocation);
