<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// template js
$doc->addScript($tpath.'/js/lib/superfish/superfish.js');
$doc->addScript($tpath.'/js/lib/center/center.min.js');
$doc->addScript($tpath.'/js/lib/trmix/trmix.min.js');
$doc->addScript($tpath.'/js/lib/bigslide/bigSlide.js');
$doc->addScript($tpath.'/js/lib/cookie/js.cookie.min.js');
$doc->addScript($tpath.'/js/logic.js');

//template js-css
$doc->addStyleSheet($tpath.'/js/lib/superfish/superfish.css');


// template css
$doc->addStyleSheet($tpath.'/css/main.min.css');

