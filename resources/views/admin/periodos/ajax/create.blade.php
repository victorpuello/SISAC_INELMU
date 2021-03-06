<div id="custom-content" class="modal-block modal-block-primary modal-header-color">
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Crear nuevo periodo</h2>
        </header>
        <div class="card-body">
            @include('admin.periodos.partials.messages')
            {!! Form::open(['route' => 'periodos.store', 'method' => 'POST','class' => 'form-horizontal form-bordered']) !!}
            @include('admin.periodos.partials.fields')
                <div class="card-footer text-right">
                    <button class="btn btn-default btn-danger modal-dismiss">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</div>