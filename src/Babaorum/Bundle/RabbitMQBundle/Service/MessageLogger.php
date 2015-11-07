<?php

namespace Babaorum\Bundle\RabbitMQBundle\Service;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

/**
* Test RabbitMQ bundle with service MessageDeliver
*/
class MessageLogger implements ConsumerInterface
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
        $msgBody = json_decode($msg->body, true);

        // Log as error to also print it in console when running consumer
        $this->logger->error('RabbitMQ message_logger :: '.$msgBody['messageData']);
        return true;
    }
}
