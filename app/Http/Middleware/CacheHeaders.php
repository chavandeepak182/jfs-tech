<?php

namespace App\Http\Middleware;

use Closure;

class CacheHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        
        $extensions = [
            'jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 
            'ico', 'css', 'js', 'woff', 'woff2', 'ttf', 'otf', 'eot'
        ];
        
        $path = $request->getPathInfo();
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        
        if (in_array($ext, $extensions)) {
            $response->header('Cache-Control', 'public, max-age=31536000, immutable');
            $response->header('Expires', gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
        } elseif (in_array($ext, ['html', 'htm'])) {
            $response->header('Cache-Control', 'public, max-age=3600, must-revalidate');
            $response->header('Expires', gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
        }
        
        return $response;
    }
}