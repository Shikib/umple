<?php

function _new_instance($params) {
  if (!empty($_POST['element_name'])) {
    $element_name = $_POST['element_name'];
  } else {
    //TODO: redirect and show error message
    //return false;
  }

  //TODO: make sure that attributes received by POST are the same and are in the same order as in $attributes
  //right now it's relying on the order by which they are sent
  //$attributes = $params['UMPLE_MODEL']['ELEMENTS'][$element_name]['attributes'];
  //$params = check_attributes($element_name, $_POST);
  $params = array_slice($_POST, 1);

  //relies on autoload method in index.php
  $reflection = new ReflectionClass($element_name);
  $_SESSION['instances'][$element_name][] = $reflection->newInstanceArgs($params);

  header('Location: '.WEB_DOMAIN.'/main/show_element/'.$element_name);
}
