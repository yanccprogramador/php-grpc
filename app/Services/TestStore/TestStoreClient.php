<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Services\TestStore;

/**
 */
class TestStoreClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \TestStore\TesteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReturnFoo(\App\Services\TestStore\TesteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/TestStore.TestStore/ReturnFoo',
        $argument,
        ['\App\Services\TestStore\TesteResponse', 'decode'],
        $metadata, $options);
    }

}
