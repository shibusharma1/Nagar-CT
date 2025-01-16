protected $routeMiddleware = [
    'role' => \App\Http\Middleware\RoleMiddleware::class,
    'auth.custom' => \App\Http\Middleware\CustomAuthMiddleware::class, // From previous implementation
];
