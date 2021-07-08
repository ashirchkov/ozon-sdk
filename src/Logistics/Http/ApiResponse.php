<?php


namespace AlexeyShirchkov\Ozon\Logistics\Http;


use Psr\Http\Message\ResponseInterface;

class ApiResponse extends Response
{

    public function __construct(ResponseInterface $response) {

        parent::__construct($response);

        if(!$this->isSuccess()) {
            if(isset($this->result['errorCode'])) {
                $this->errors[] = $this->result['message'];
            } else {
                $this->errors[] = $response->getReasonPhrase();
            }
        }

    }

}