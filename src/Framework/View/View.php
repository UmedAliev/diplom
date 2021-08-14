<?php


namespace Framework\View;


use Laminas\Diactoros\Response\HtmlResponse;

class View
{
    /**
     * @param string $path
     * @param array $data
     *
     * @throws \ErrorException
     */
    public static function render(string $path, array $data = [])
    {
        /**
         * Получение url представлений
         *
         */
        $fullPath = __DIR__ . '/../../App/Views/' . $path . '.php';

        if (!file_exists($fullPath)) {
            throw new \ErrorException('Views cannot be found');
        }

        /**
         * Передача параметров в представление
         *
         */
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }

        /**
         * Рендер
         *
         */

        ob_start();
        include $fullPath;
        $myvar = ob_get_clean();

        return $myvar;
    }

}