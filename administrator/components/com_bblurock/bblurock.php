<?php

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('Bblurock');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();