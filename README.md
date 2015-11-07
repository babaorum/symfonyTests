Symfony Tests
========================

Hi, this is just a little repository to try some bundles and others stuffs with symfony2.

Right now all I have is a test of RabbitMQ with a simple argument passed as a GET argument for produce the message.

#####Wanna try it :

> Simply run the following command to start you're consumer

```sh
    $ php app/console rabbitmq:consumer -m 50 message_logger
```

> Then you can just reach the project to the following url to produce a message `/rabbit/{message}`

If you want to understand how it work look at the following files:
* app/config.yml
* src/Babaorum/Bundle/RabbitMQBundle/Controller/MainController.php
* src/Babaorum/Bundle/RabbitMQBundle/Service/MessageLogger.php
