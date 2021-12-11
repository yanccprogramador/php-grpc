<?php

namespace App\Http\Controllers;

use App\Services\TestStore\FooRequest;
use Illuminate\Http\Request;
use Endpoints\Testes\Teste\TesteResponse;
use GPBMetadata\Resources\Protos\Teste;
use \Grpc\ChannelCredentials;
use App\Services\TestStore\TestClient;
use App\Services\TestStore\TesteRequest;
use Google\Protobuf\Internal\CodedInputStream;
use App\Services\TestStore\TestStoreClient;

class TesteController extends Controller
{
    //
    public function init()
    {
        $client = new TestStoreClient('localhost:50051',[
            'credentials' => ChannelCredentials::createInsecure()
        ]);
        $response = $client->ReturnFoo(new TesteRequest())->wait();
        list($reply, $status)=$response;

        return response()->json(['foo'=>$reply->getFoo()],200);
    }
}
