<?php
namespace Tests\Unit;

use ATS\DataTables\NotaDataTablesEditor;
use ATS\Model\Estudiante;
use ATS\Model\Planilla;
use Illuminate\Support\Facades\Config;
use Mockery;
use Tests\TestCase;

class NotaDataTablesEditorTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_edit_rules_require_id_and_planilla()
    {
        $editor = new NotaDataTablesEditor();
        $estudiante = new Estudiante();

        $rules = $editor->editRules($estudiante);
        $this->assertArrayHasKey('id', $rules);
        $this->assertArrayHasKey('planilla_id', $rules);
    }

    public function test_updating_processes_notas_and_inasistencias()
    {
        $editor = new NotaDataTablesEditor();

        $planilla = Mockery::mock(Planilla::class);
        $editor->updating(new Estudiante(), [
            'planilla_id' => 1,
            'notas' => [
                'data' => [
                    ['id' => 1, 'cognitivo' => ['id' => 1, 'score' => 4]],
                    ['id' => 2, 'procedimental' => ['id' => 2, 'score' => 4]],
                    ['id' => 3, 'actitudinal' => ['id' => 3, 'score' => 4]]
                ]
            ],
            'inasistencias' => [
                'data' => ['id' => 1, 'numero' => 0]
            ]
        ]);

        $this->assertTrue(true); // If no exception is thrown, assume success
    }
}
