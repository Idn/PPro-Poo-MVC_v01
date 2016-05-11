<?php

require 'form.php';

$form = new Form(array(
    'username' => 'roger'
));

//var_dump($form);

echo $form->input('username');
echo $form->input('password');
echo $form->submit();

echo '<br/>';

echo __DIR__;