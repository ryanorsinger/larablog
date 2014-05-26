<?php
use Acme\Transformers;

class ApiController extends \BaseController {


    protected $statusCode;


    public function getStatusCode()
    {
        return $this->statusCode;
    }


    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function respondNotFound($message)
    {
        return $this->respond();

    }

    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
}
