<?php
//phpinfo();
//Establish connection to AMQP
$connection = new AMQPConnection();
$connection->setHost('192.168.1.104');
$connection->setLogin('qianxun');
$connection->setPassword('qianxun');
$connection->connect();

//Create and declare channel
$channel = new AMQPChannel($connection);

//AMQPC Exchange is the publishing mechanism
$exchange = new AMQPExchange($channel);
try {
    $routing_key = 'hello';
    $queue = new AMQPQueue($channel);
    $queue->setName($routing_key);
    $queue->setFlags(AMQP_NOPARAM);
    $queue->declareQueue();
    
    
    $message = 'nowtime:'.time().'['.date('Y-m-d H:i:s').']';
    $exchange->publish($message, $routing_key);
    
    $connection->disconnect();
}catch (Exception $ex){
    print_r($ex);
}
?>