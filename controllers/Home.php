# controllers/pages_controller.php

<?php
require_once('controllers/controller.php');

class Home extends controller
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
      'name' => 'Sang Beo',
      'age' => 22
    );
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}
