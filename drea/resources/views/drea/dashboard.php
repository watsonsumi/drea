<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Docentes') }}
        </h2>
    </x-slot>

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
<br/><br/>
<div class="container">
    <a class="btn btn-success" href="javascript:void(0)" id="createNewBook"> Crear Docente </a><br/><br/>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
            <th width="300px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="bookForm" name="bookForm" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">DNI</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="DNI" name="DNI" placeholder="Enter DNI" value="" maxlength="50" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nombres</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Enter Nombres" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Apellidos</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Enter Apellidos" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">FechaNacimiento</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="Enter Fecha Nacimiento" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Establecimiento</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Establecimiento" name="Establecimiento" placeholder="Enter Establecimiento" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Cargo</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Cargo" name="Cargo" placeholder="Enter Cargo" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">TipoServidor</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="TipoServidor" name="TipoServidor" placeholder="Enter TipoServidor" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Enter Celular" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Correo</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Enter Correo" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Direccion</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Enter Direccion" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar 
                     </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>      
                </form>
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
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('dashboardd.index') }}",
        columns: [
            {data: 'DNI', name: 'DNI'},
            {data: 'Nombres', name: 'Nombres'},
            {data: 'Apellidos', name: 'Apellidos'},
            {data: 'FechaNacimiento', name: 'FechaNacimiento'},
            {data: 'Establecimiento', name: 'Establecimiento'},
            {data: 'TipoServidor', name: 'TipoServidor'},
            {data: 'Celular', name: 'Celular'},
            {data: 'Correo', name: 'Correo'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewBook').click(function () {
        $('#saveBtn').val("create-book");
        $('#DNI').val('');
        $('#bookForm').trigger("reset");
        $('#modelHeading').html("Crear Nuevo Docente");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editBook', function () {
      var id = $(this).data('id');
        console.log(id);
      $.get("{{ route('dashboardd.index') }}" +'/' + id +'/edit', function (data) {
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
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#bookForm').serialize(),
          url: "{{ route('dashboardd.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#bookForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteBook', function () {
     
        var DNI = $(this).data("id");
        confirm("¿Estás seguro de que quieres eliminar?");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('dashboardd.store') }}"+'/'+DNI,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
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
