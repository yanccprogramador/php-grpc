<?php
namespace App\Services\TestStore;
use App\Services\TestStore\FooRequest;

/**
 * service Xuexitest{}
 * Write a client (gprc defines the Xuexitest service)
 */
class TestClient extends \Grpc\BaseStub{

    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * rpc SayTest(TestRequest) returns (TestReply) {}
     * Try to use the same method name as (gprc defines the Xuexitest service)
     * For request and response services
     */
    public function getFoo(TesteRequest $argument,$metadata=[],$options=[]){
        // (/ xuexitest.Xuexitest/SayTest) is the service and method that requests the server, basically the same as the proto file definition
        // (\ Xuexitest\TestReply) is the response information (that kind), basically the same as the proto file definition
        return $this->_simpleRequest('/TestStore.TestStore/ReturnFoo',
           $argument,
            ['\App\Services\TestStore\TesteRequest','decode'],
            $metadata, $options);
    }

}
