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
        $this->get('old_sound_rabbit_mq.message_sender_producer')
            ->setContentType('application/json')
            ->publish(json_encode(['messageData' => $message]));

        die('Done Man !');
    }
}
