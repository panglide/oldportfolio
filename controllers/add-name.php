<?php


$app[ 'database' ]->insert('contact', [

    'name' => $_POST[ 'name' ],
    'email' => $_POST[ 'email' ],
    'message' => $_POST[ 'message' ]
]);

require 'views/add-name.view.php';
