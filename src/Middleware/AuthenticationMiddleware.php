<?php
declare(strict_types=1);

namespace App\Middleware;

use Cake\Http\Exception\UnauthorizedException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Cake\Http\ServerRequest;
use Cake\I18n\FrozenTime;
use Cake\Routing\Router;

/**
 * Authentication middleware
 */
class AuthenticationMiddleware implements MiddlewareInterface
{
    /**
     * Process method.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request The request.
     * @param \Psr\Http\Server\RequestHandlerInterface $handler The request handler.
     * @return \Psr\Http\Message\ResponseInterface A response.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if($request instanceof ServerRequest) {
            if(!$request->getSession()->read('connected') && $request->getParam('action') != 'login') {
                throw new UnauthorizedException();
            }

            if($request->getSession()->read('connected') && $request->getSession()->read('dateOfDeconnection') < date('Y-m-d H:i:s')) {
                $request->getSession()->write('connected', false);
                $request->getSession()->write('dateOfDeconnection', null);
                throw new UnauthorizedException();
            }
        }

        return $handler->handle($request);
    }
}
