<?php

namespace Moises\ClimateApi;

use Moises\ClimateApi\Response;

class ApiResponse implements Response
{
    protected $body;
    protected $headers;
    protected $statusCode;
    protected $statusText;
    public function setBody($body): void
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }
    public function setStatusCode($statusCode): void
    {
        $this->statusCode = $statusCode;
    }
    public function setStatusText($statusText): void
    {
        $this->statusText = $statusText;
    }
    public function setHeaders($headers): void
    {
        $this->headers = $headers;
    }
}