<?php

namespace App\Traits;

use Illuminate\Support\Facades\View;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;

trait Responser
{
    private function meta(int $code = 200, $message = null, bool $error = false): array
    {
        return [
            'meta' => [
                'error' => $error,
                'message' => $message,
                'statusCode' => $code,
            ]
        ];
    }

    /**
     * Building  response
     * @param int $code
     * @param null $message
     * @param array $response
     * @return JsonResponse
     */
    public function JsonResponse(array $response = [], int $code = 200, $message = null): JsonResponse
    {
        $response = $this->meta($code, $message) + ['response' => $response];
        return new JsonResponse([$response], $code);
    }


    public function viewResponse(string $path, array $data = [], int $code = 200, $header = []): HtmlResponse
    {
        $html = \Framework\View\View::render($path, $data);
        return new HtmlResponse($html, $code, $header);
    }



}
