<?php
namespace Tests\Unit;

use ATS\Model\Planilla;
use Tests\TestCase;

class PlanillaUpdateTest extends TestCase
{
    public function test_is_load_and_is_edited_helpers()
    {
        $planilla = new Planilla(['cargada' => 0, 'modificada' => 0]);
        $this->assertFalse($planilla->isLoad());
        $this->assertFalse($planilla->isEdited());

        $planilla->cargada = 1;
        $planilla->modificada = 1;

        $this->assertTrue($planilla->isLoad());
        $this->assertTrue($planilla->isEdited());
    }
}
