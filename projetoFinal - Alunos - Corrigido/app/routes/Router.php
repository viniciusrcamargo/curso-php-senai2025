<?php

class Router{
    private array $routes = [];

    public function get(string $path, callable $handler): void{
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, callable $handler): void{
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(string $method, string $uri): void {
        $path = parse_url($uri, PHP_URL_PATH);
        // Rotas com parâmetro /contatos/{id} e /contatos/{id}/edit
        foreach ($this->routes[$method] ?? [] as $route => $handler) {
            $pattern = preg_replace('#\{(\w+)\}#', '(?P<$1>[^/]+)', $route);
            $pattern = "#^" . $pattern . "$#";
            if (preg_match($pattern, $path, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                $handler($params);
                return;
            }
        }
        http_response_code(404);
        echo 'Rota não encontrada';
    }

}
