<?php
require_once 'select.php';
require_once 'option.php';
require_once 'input.php';
require_once 'form.php';
require_once 'submit.php';

$form = (new Form)->setAttrs(['action' => 'test.php', 'met
		hod' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'test');

echo (new Select)->setAttr('name', 'list')
    ->add((new Option())->setText('item1'))
    ->add((new Option())->setText('item2'))
    ->add((new Option())->setText('item3'))
    ->show();

echo new Submit;
echo $form->close();