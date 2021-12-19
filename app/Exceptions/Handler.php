<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($request->is('api/*') || $request->wantsJson()) {
            if (App::environment('local')) {
                $error = [['failed' => [$exception->getMessage()]]];
                $message = 'Failed Operation Contact Technical Support';
            } else {
                $error = [['failed' => ['Failed Operation Contact Technical Support']]];
                $message = 'Failed Operation Contact Technical Support';
            }
            if ($exception->getMessage() == "Unauthenticated.") {
                $message = 'Unauthenticated.';
                return response()->error($error, $message, 401);
            }
            if ($exception instanceof HttpException) {
                $error = [['failed' => [$exception->getMessage()]]];
                $message = $exception->getMessage();
                return response()->error($error, $message, $exception->getStatusCode());
            }
            if ($exception instanceof ValidationException) {
                $error = [['failed' => [$exception->getMessage()]]];
                $message = $exception->getMessage();
                return response()->error($error, $message, 422);
            }
        }
        if ($exception instanceof UnauthorizedException) {
            return response()->json(['You have no permission to access this page.']);
        }
        return parent::render($request, $exception);
    }
}
