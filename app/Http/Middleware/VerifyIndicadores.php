<?php

namespace ATS\Http\Middleware;

use ATS\Clases\Indicador\IndicadoresPlanilla;
use ATS\Clases\Planilla\ConfigPlanillas;
use ATS\Exceptions\IndicadoresException;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;

class VerifyIndicadores
{

    protected $planilla;


    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     * @throws IndicadoresException
     */
    public function handle($request, Closure $next)
    {
        $conf = new ConfigPlanillas();
        $indicadores = new IndicadoresPlanilla($request->planilla);
        if (! $this->CheckStatus($indicadores,$conf)){
            throw new IndicadoresException();
        }
        return $next($request);
    }

    /**
     * @param IndicadoresPlanilla $indicadores
     * @param ConfigPlanillas $conf
     * @return bool
     */
    public function CheckStatus(IndicadoresPlanilla $indicadores, ConfigPlanillas $conf){
        return $indicadores->countInd() === $conf->nro_indicadores();
    }

}
