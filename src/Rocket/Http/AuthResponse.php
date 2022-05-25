<?php


namespace AlexeyShirchkov\Ozon\Rocket\Http;


use Psr\Http\Message\ResponseInterface;

class AuthResponse extends Response
{

    /**
     * AuthResponse constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response) {

        parent::__construct($response);

        if(!$this->isSuccess()) {
            if(isset($this->result['error'])) {
                $this->errors[] = $this->result['error'];
            } else {
                $this->errors[] = $response->getReasonPhrase();
            }
        }

    }

}