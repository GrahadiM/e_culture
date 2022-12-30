<?php

namespace App\Http\Middleware;

use App\Models\ViewPage;
use Closure;
use Illuminate\Http\Request;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $atr = ViewPage::where([
			['tanggal', date('Y-m-d')],
		])->first();

		$count = $request->count == null ? 1 : $request->count;
		$new = false;

		if (!$atr) {
			$atr = new ViewPage();
			$new = true;
		}

        if ($new) {
            $atr->count = $count;
        } else {
            $atr->count = $atr->count + $count;
        }
        $atr->save();

        return $next($request);
    }
}
