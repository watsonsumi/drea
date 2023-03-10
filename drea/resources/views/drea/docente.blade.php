<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Docentes') }}
        </h2>
    </x-slot>

    <!-- <img src="img/logo_drea.png" width="1000" height="1000"> -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
                        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
                        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
                    </head>

                    <body>
                        <style>
                            .scroll {
                                overflow-x: auto;
                                white-space: nowrap;
                            }

                            .colorBoton {
                                background-color: #7b1523;
                                color: #e5e5e5;
                            }
                        </style>
                        <div class="container">
                            <a class="btn colorBoton" href="javascript:void(0)" id="createNewBook"> Crear Docente </a><br /><br />
                            <table class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th>DNI</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Establecimiento</th>
                                        <th>TipoServidor</th>
                                        <th>Celular</th>
                                        <th>Correo</th>
                                        <th width="300px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal" id="ajaxModel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelHeading">hhhhhhh</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="container-fluid">
                                            <form id="bookForm" name="bookForm" class="form-horizontal">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DNI</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DNI" name="DNI" placeholder="Ingrese DNI" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Nombres</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Ingrese Nombres" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Apellidos</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Ingrese Apellidos" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">FechaNacimiento</label>
                                                            <div class="col-sm-12">
                                                                <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="Ingrese Fecha Nacimiento" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Establecimiento</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Establecimiento" name="Establecimiento" placeholder="Ingrese Establecimiento" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Cargo</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Ingrese Cargo" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">TipoServidor</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="TipoServidor" name="TipoServidor" placeholder="Ingrese TipoServidor" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Celular</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Ingrese Celular" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Correo</label>
                                                            <div class="col-sm-12">
                                                                <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Ingrese Correo" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Direccion</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Ingrese Direccion" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
                        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
                        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
                        <script type="text/javascript">
                            $(function() {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                var table = $('.data-table').DataTable({
                                    scrollX: "40px",
                                    scrollCollapse: true,
                                    // paging: false,
                                    responsive: true,
                                    processing: true,
                                    serverSide: true,
                                    language: {
                                        "decimal": "",
                                        "emptyTable": "No hay datos",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                                        "infoFiltered": "(Filtro de _MAX_ total registros)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar _MENU_ registros",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscar:",
                                        "zeroRecords": "No se encontraron coincidencias",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Ultimo",
                                            "next": "Próximo",
                                            "previous": "Anterior"
                                        }
                                    },

                                    buttons: [
                                        'copy', 'csv', 'excel', 'pdf', 'print'
                                    ],
                                    ajax: "{{ route('dashboardd.index') }}",
                                    columns: [{
                                            data: 'DNI',
                                            name: 'DNI'
                                        },
                                        {
                                            data: 'Nombres',
                                            name: 'Nombres'
                                        },
                                        {
                                            data: 'Apellidos',
                                            name: 'Apellidos'
                                        },
                                        {
                                            data: 'FechaNacimiento',
                                            name: 'FechaNacimiento'
                                        },
                                        {
                                            data: 'Establecimiento',
                                            name: 'Establecimiento'
                                        },
                                        {
                                            data: 'TipoServidor',
                                            name: 'TipoServidor'
                                        },
                                        {
                                            data: 'Celular',
                                            name: 'Celular'
                                        },
                                        {
                                            data: 'Correo',
                                            name: 'Correo'
                                        },
                                        {
                                            data: 'action',
                                            name: 'action',
                                            orderable: false,
                                            searchable: false
                                        },
                                    ]
                                });
                                $('#createNewBook').click(function() {
                                    $('#saveBtn').val("create-book");
                                    $('#DNI').val('');
                                    $('#bookForm').trigger("reset");
                                    $('#modelHeading').html("Crear Nuevo Docente");
                                    $('#ajaxModel').modal('show');
                                });
                                $('body').on('click', '.editBook', function() {
                                    var id = $(this).data('id');
                                    console.log(id);
                                    $.get("{{ route('dashboardd.index') }}" + '/' + id + '/edit', function(data) {
                                        $('#modelHeading').html("Editar");
                                        $('#saveBtn').val("edit-book");
                                        $('#ajaxModel').modal('show');
                                        $('#DNI').val(data.DNI);
                                        $('#Nombres').val(data.Nombres);
                                        $('#Apellidos').val(data.Apellidos);
                                        $('#FechaNacimiento').val(data.FechaNacimiento);
                                        $('#Establecimiento').val(data.Establecimiento);
                                        $('#TipoServidor').val(data.TipoServidor);
                                        $('#Celular').val(data.Celular);
                                        $('#Correo').val(data.Correo);
                                    })
                                });
                                $('#saveBtn').click(function(e) {
                                    e.preventDefault();
                                    $(this).html('Save');

                                    $.ajax({
                                        data: $('#bookForm').serialize(),
                                        url: "{{ route('dashboardd.store') }}",
                                        type: "POST",
                                        dataType: 'json',
                                        success: function(data) {

                                            $('#bookForm').trigger("reset");
                                            $('#ajaxModel').modal('hide');
                                            table.draw();

                                        },
                                        error: function(data) {
                                            console.log('Error:', data);
                                            $('#saveBtn').html('Save Changes');
                                        }
                                    });
                                });

                                $('body').on('click', '.deleteBook', function() {

                                    var DNI = $(this).data("id");
                                    confirm("Are You sure want to delete !");

                                    $.ajax({
                                        type: "DELETE",
                                        url: "{{ route('dashboardd.store') }}" + '/' + DNI,
                                        success: function(data) {
                                            table.draw();
                                        },
                                        error: function(data) {
                                            console.log('Error:', data);
                                        }
                                    });
                                });

                            });
                        </script>
                    </body>

                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>