<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Establecimientos') }}
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
<style>
.scroll{
    overflow-x: auto;
    white-space: nowrap;
} 
.colorBoton{
    background-color: #7b1523;
    color: #e5e5e5;
}</style>
<br/><br/>
<div class="container">
    <a class="btn colorBoton" href="javascript:void(0)" id="createNewBook"> Crear Establecimiento </a><br/><br/>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
            <th>Codmodular</th>
            <th>Ugel</th>
            <th>NombreEstablecimiento</th>
            <th>Nivel</th>
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
                        <label for="name" class="col-sm-2 control-label">Codmodular</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Codmodular" name="Codmodular" placeholder="Ingrese Codigo modular" value="" maxlength="50" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Ugel</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Ugel" name="Ugel" placeholder="Ingrese Ugel" value="" maxlength="50" required="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">NombreEstablecimiento</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="NombreEstablecimiento" name="NombreEstablecimiento" placeholder="Ingrese Nombre Establecimiento" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nivel</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="Nivel" name="Nivel" placeholder="Ingrese Nivel" value="" maxlength="50" required="">
                        </div>
                    </div>                  
                    
                    <div class="form-group">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar 
                     </button>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>       -->
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
        // scrollX: "40px",
            scrollCollapse: true,
            // paging: false,
        responsive: true,
        processing: true,
        serverSide: true,
        language: {
        "decimal":        "",
    "emptyTable":     "No hay datos",
    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
    "infoFiltered":   "(Filtro de _MAX_ total registros)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Mostrar _MENU_ registros",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No se encontraron coincidencias",
    "paginate": {
        "first":      "Primero",
        "last":       "Ultimo",
        "next":       "Próximo",
        "previous":   "Anterior"
    }},
       
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        ajax: "{{ route('establecimiento.index') }}",
        columns: [
            {data: 'Codmodular', name: 'Codmodular'},
            {data: 'Ugel', name: 'Ugel'},
            {data: 'NombreEstablecimiento', name: 'NombreEstablecimiento'},
            {data: 'Nivel', name: 'Nivel'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewBook').click(function () {
        $('#saveBtn').val("create-book");
        $('#Codmodular').val('');
        $('#bookForm').trigger("reset");
        $('#modelHeading').html("Crear Nuevo Establecimiento");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editBook', function () {
      var id = $(this).data('id');
        console.log(id);
      $.get("{{ route('establecimiento.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Editar");
          $('#saveBtn').val("edit-book");
          $('#ajaxModel').modal('show');
          $('#Codmodular').val(data.Codmodular);
          $('#Ugel').val(data.Ugel);
          $('#NombreEstablecimiento').val(data.NombreEstablecimiento);
          $('#Nivel').val(data.Nivel);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#bookForm').serialize(),
          url: "{{ route('establecimiento.store') }}",
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
     
        var Codmodular = $(this).data("id");
        confirm("¿Estás seguro de que quieres eliminar?");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('establecimiento.store') }}"+'/'+Codmodular,
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
