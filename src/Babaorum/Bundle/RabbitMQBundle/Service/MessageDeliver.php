<?php

namespace Babaorum\Bundle\RabbitMQBundle\Service;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

/**
* Test RabbitMQ bundle with service MessageDeliver
*/
class MessageDeliver implements ConsumerInterface
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(AMQPMessage $msg)
    {
        // Process picture upload
        // $msg will be an install of PhpAmqpLib\Message\AMQPMessage with the $msg->body

        $msgBody = json_decode($msg->body, true);
        $this->logger->info('RabbitMQ test ::'.$msgBody['messageData']);
        return true;
    }
}
