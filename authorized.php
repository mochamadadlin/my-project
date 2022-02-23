$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
]);
 public function __construct()
    {
        $this->middleware('auth');
    }

public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        $this->app['auth']->viaRequest('api', function ($request) {
            $token = $request->header('token');
            
            if ($token) {
                return User::where('token', $token)->first();
            }
        });
    }