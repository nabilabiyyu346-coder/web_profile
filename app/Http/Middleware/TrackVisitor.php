<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $browser = substr($request->userAgent(), 0, 255); 
        $today = now()->toDateString();

        $alreadyVisited = Visitor::where('ip_address', $ip)
            ->where('visited_at', $today)
            ->exists();

        if (! $alreadyVisited) {
            Visitor::create([
                'ip_address' => $ip,
                'browser' => $browser,
                'visited_at' => $today,
            ]);
        }

        return $next($request);
    }
}
