# This shows how Slim-Http decorators can be added to a Slim 4 application

**Currently this code is broken with the following error:**

# Slim Application Error

The application could not run because of the following error:

## Details

**Type:** Error
**Code:** 0
**Message:** Call to undefined method Slim\Psr7\Request::isGet()
**File:** /var/www/app/public/index.php
**Line:** 21

## Trace

    #0 /var/www/app/vendor/slim/slim/Slim/Handlers/Strategies/RequestResponse.php(38): {closure}(Object(Slim\Psr7\Request), Object(Slim\Psr7\Response), Array)
    #1 /var/www/app/vendor/slim/slim/Slim/Routing/Route.php(358): Slim\Handlers\Strategies\RequestResponse-&gt;__invoke(Object(Closure), Object(Slim\Psr7\Request), Object(Slim\Psr7\Response), Array)
    #2 /var/www/app/vendor/slim/slim/Slim/MiddlewareDispatcher.php(65): Slim\Routing\Route-&gt;handle(Object(Slim\Psr7\Request))
    #3 /var/www/app/vendor/slim/slim/Slim/MiddlewareDispatcher.php(65): Slim\MiddlewareDispatcher-&gt;handle(Object(Slim\Psr7\Request))
    #4 /var/www/app/vendor/slim/slim/Slim/Routing/Route.php(315): Slim\MiddlewareDispatcher-&gt;handle(Object(Slim\Psr7\Request))
    #5 /var/www/app/vendor/slim/slim/Slim/Routing/RouteRunner.php(68): Slim\Routing\Route-&gt;run(Object(Slim\Psr7\Request))
    #6 /var/www/app/vendor/slim/slim/Slim/Middleware/RoutingMiddleware.php(45): Slim\Routing\RouteRunner-&gt;handle(Object(Slim\Psr7\Request))
    #7 /var/www/app/vendor/slim/slim/Slim/MiddlewareDispatcher.php(121): Slim\Middleware\RoutingMiddleware-&gt;process(Object(Slim\Psr7\Request), Object(Slim\Routing\RouteRunner))
    #8 /var/www/app/vendor/slim/slim/Slim/Middleware/ErrorMiddleware.php(76): Psr\Http\Server\RequestHandlerInterface@anonymous-&gt;handle(Object(Slim\Psr7\Request))
    #9 /var/www/app/vendor/slim/slim/Slim/MiddlewareDispatcher.php(121): Slim\Middleware\ErrorMiddleware-&gt;process(Object(Slim\Psr7\Request), Object(Psr\Http\Server\RequestHandlerInterface@anonymous))
    #10 /var/www/app/vendor/slim/slim/Slim/MiddlewareDispatcher.php(65): Psr\Http\Server\RequestHandlerInterface@anonymous-&gt;handle(Object(Slim\Psr7\Request))
    #11 /var/www/app/vendor/slim/slim/Slim/App.php(199): Slim\MiddlewareDispatcher-&gt;handle(Object(Slim\Psr7\Request))
    #12 /var/www/app/vendor/slim/slim/Slim/App.php(183): Slim\App-&gt;handle(Object(Slim\Psr7\Request))
    #13 /var/www/app/public/index.php(30): Slim\App-&gt;run()
    #14 {main}

Go Back
