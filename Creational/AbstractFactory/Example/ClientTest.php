<?php


namespace DesignPatterns\Creational\AbstractFactory;
require_once "GUIFactory.php";
require_once "forms/WebForm.php";
require_once "forms/MacForm.php";
require_once "forms/AndroidForm.php";


$WebGui = new GUIFactory(new WebForm());
$MacGui = new GUIFactory(new MacForm());
$AndroidGui = new GUIFactory(new AndroidForm());

// create web form
$WebGui->form->createButton();
$WebGui->form->createTextInput();

// create Mac form
$MacGui->form->createButton();
$MacGui->form->createTextInput();

// create Mobile Form
$AndroidGui->form->createButton();
$AndroidGui->form->createTextInput();
