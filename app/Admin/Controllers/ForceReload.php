<?php

namespace App\Http\Middleware;

use Closure;

class ForceReload
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->query('reload') == 1) {
            $script = '<script>window.location.reload(true);</script>';
            $content = $response->getContent();
            $content = str_replace('</body>', $script . '</body>', $content);
            $response->setContent($content);
        }

        return $response;
    }
}
