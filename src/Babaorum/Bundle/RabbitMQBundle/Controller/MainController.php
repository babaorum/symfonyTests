<?php

namespace Babaorum\Bundle\RabbitMQBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction($name)
    {
        $logger = $this->get('logger');
        die(dump($logger));
        die(dump($name));
    }

    public function produceAction($message)
    {
$test =
        $this->get('old_sound_rabbit_mq.message_deliver_producer')->setContentType('application/json')
// ;
// die(dump($test));
           ->publish(json_encode(['messageData' => $message]));

        die('Done Man !');
    }
}
