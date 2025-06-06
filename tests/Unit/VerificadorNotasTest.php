<?php
namespace Tests\Unit;

use ATS\Clases\Estudiante\VerificadorNotas;
use ATS\Model\Planilla;
use ATS\Model\Periodo;
use Illuminate\Support\Collection;
use Mockery;
use Tests\TestCase;

class VerificadorNotasTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_get_periodo_final_returns_final_period()
    {
        $planilla = Mockery::mock(Planilla::class);

        $periodo = new Periodo(['id' => 1, 'isFinal' => 1]);

        $mock = Mockery::mock('alias:ATS\\Clases\\CurrentAnio');
        $mock->shouldReceive('periodos')->once()->andReturn(new Collection([$periodo]));

        $verificador = new VerificadorNotas($planilla);
        $this->assertSame($periodo, $verificador->getPeriodoFinal());
    }
}
