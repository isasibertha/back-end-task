<?php
namespace Drupal\welcome\Controller;

class WelcomeController
{
    public function Welcome()
    {
        $element = array('#markup'=>'Welcome to My Task Page!',);
        return $element;
    }
}

?>