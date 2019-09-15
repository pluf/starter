<?php

namespace Pluf\Starter;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * Starter main views
 *
 * @author maso <mostafa.barmshory@dpq.co.ir>
 */
class Views extends  \Pluf_Views
{

    /**
     * Hello world!
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return Pluf_HTTP_Response_Json
     */
    public function hello($request, $match)
    {
        $connection = new AMQPStreamConnection('www.mrfruity.ir', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare('hello', false, false, false, false);

        $msg = new AMQPMessage('Hello World!');
        $channel->basic_publish($msg, '', 'hello');

        $channel->close();
        $connection->close();

        return array(
            'message' => 'hi',
            'logs' => array(
                " [x] Sent 'Hello World!'\n"
            )
        );
    }



    /**
     * Send message
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return Pluf_HTTP_Response_Json
     */
    public function sendMessage($request, $match)
    {
        $connection = new AMQPStreamConnection('www.mrfruity.ir', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare('hello', false, false, false, false);

        $msg = new AMQPMessage('Hello World!');
        $channel->basic_publish($msg, '', 'hello');

        $channel->close();
        $connection->close();

        return array(
            'message' => 'message send',
        );
    }
}