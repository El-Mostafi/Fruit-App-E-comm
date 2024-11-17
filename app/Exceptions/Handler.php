<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;





class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
{
    if ($exception instanceof \Illuminate\Http\Exceptions\HttpResponseException) {
        return parent::render($request, $exception);
    }

    if ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
        $exception = new NotFoundHttpException($exception->getMessage(), $exception);
    }

    if ($exception instanceof NotFoundHttpException) {
        return redirect()->route('page_error'); // Redirect to your custom route
    }

    return parent::render($request, $exception);
}
}
