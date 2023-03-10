<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de planillas') }}
        </h2>
    </x-slot>
    <?php
    $cliente = "Luis Cabrera Benito";
    $remitente = "Luis Cabrera Benito";
    $web = "https://parzibyte.me/blog";
    $mensajePie = "Gracias por su compra";
    $numero = 1;
    $descuento = 0;
    $porcentajeImpuestos = 16;
    $productos = [
        [
            "precio" => 50,
            "descripcion" => "Procesador AMD Ryzen 7",
            "cantidad" => 1,
        ],
        [
            "precio" => 800,
            "descripcion" => "Tarjeta de vídeo",
            "cantidad" => 2,
        ],
    ];
    $fecha = date("Y-m-d");
    ?>
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
                        <script src="html2pdf.bundle.min.js"></script> 
                        <script src="script.js"></script> 
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                            .impresionText {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 2px red;
                            border-radius: 4px;
                            }
                        </style>
                        <br /><br />
                        <div class="container">
                            <a class="btn colorBoton" href="javascript:void(0)" id="createNewBook"> Crear Planillas </a><br /><br />
                            <table id='data-table' class="display nowrap data-table">
                                <thead>
                                    <tr>
                                        <th>Basico</th>
                                        <th>Personal</th>
                                        <th>Diferencial</th>
                                        <th>Familiar</th>
                                        <th>Contrato</th>
                                        <th>BonEsp</th>
                                        <th>IGV</th>
                                        <th>DS065</th>
                                        <th>DL26504</th>
                                        <th>DU90</th>
                                        <th>DU073</th>
                                        <th>DU011</th>
                                        <th>SNP</th>
                                        <th>DerraMag</th>
                                        <th>SubcafCus</th>
                                        <th>DL20530</th>
                                        <th>DL19990</th>
                                        <th>FONAVI</th>
                                        <th>DOCENTE_DNI</th>
                                        <th>ESTABLECIMIENTO_Codmodular</th>
                                        <th>Fecha</th>
                                        <th width="300px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal" id="ajaxModel" aria-hidden="true">
                            <div class=" modal-dialog modal-lg" role="dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelHeading"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form id="bookForm" name="bookForm" class="form-horizontal">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Basico</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Basico" name="Basico" placeholder="Enter Basico" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ml-auto">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Personal</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Personal" name="Personal" placeholder="Enter Personal" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Diferencial</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Diferencial" name="Diferencial" placeholder="Enter Diferencial" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Familiar</label>
                                                            <div class="col-sm-12">
                                                                <input type="date" class="form-control" id="Familiar" name="Familiar" placeholder="Enter Fecha Familiar" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">Contrato</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="Contrato" name="Contrato" placeholder="Enter Contrato" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">BonEsp</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="BonEsp" name="BonEsp" placeholder="Enter BonEsp" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">IGV</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="IGV" name="IGV" placeholder="Enter IGV" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DS065</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DS065" name="DS065" placeholder="Enter DS065" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DL26504</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DL26504" name="DL26504" placeholder="Enter DL26504" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DU073</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DU073" name="DU073" placeholder="Enter DU073" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DU011</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DU011" name="DU011" placeholder="Enter DU011" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">SNP</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="SNP" name="SNP" placeholder="Enter SNP" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DerraMag</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DerraMag" name="DerraMag" placeholder="Enter DerraMag" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">SubcafCus</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="SubcafCus" name="SubcafCus" placeholder="Enter SubcafCus" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DL20530</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DL20530" name="DL20530" placeholder="Enter DL20530" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DL19990</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DL19990" name="DL19990" placeholder="Enter DL19990" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">FONAVI</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="FONAVI" name="FONAVI" placeholder="Enter FONAVI" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">DNI DOCENTE</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="DOCENTE_DNI" name="DOCENTE_DNI" placeholder="Enter DNI DOCENTE" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label">ESTABLECIMIENTO</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" id="ESTABLECIMIENTO_Codmodular" name="ESTABLECIMIENTO_Codmodular" placeholder="Enter ESTABLECIMIENTO" value="" maxlength="50" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-12">
                                                                <input type="month" name="Fecha" id="Fecha" class="form-control" value="">
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

                        <!-- pdf -->


                        <div class="modal ajaxModelImprimir" id="ajaxModelImprimir" aria-hidden="true">
                            <div class=" modal-dialog modal-lg" role="dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelImprimir"></h4>
                                    </div>
                                    <div class="modal-body impresiones">
                                        <div class="container-fluid">
                                        <div class="ImprimirPDF" id="ImprimirPDF" >
                                            <div class="row">
                                                <div class="col-xs-10 ">
                                                    <p>...FECHA IMPRESION <?php echo $fecha ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="col-xs-10">
                                                        <input class="form-control impresionText" value='Apellidos              :' ></input>
                                                        <input class="form-control impresionText" value="Nombres                :"></input>
                                                        <input class="form-control impresionText" value='Fecha de Nacimiento    :' ></input>
                                                        <input class="form-control impresionText" value='Documento de Identidad :' ></input>
                                                        <input class="form-control impresionText" value='Establecimiento        :' ></input>
                                                        <input class="form-control impresionText" value='Cargo' ></input>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-xs-10">
                                                        <input type="text" class="form-control impresionText" id="Apellidos" name="Apellidos"  maxlength="50" required="">
                                                        <input type="text" class="form-control impresionText" id="Nombres" name="Nombres"  maxlength="50" required="">
                                                        <input type="text" class="form-control impresionText" id="FechaNacimiento" name="FechaNacimiento"  maxlength="50" required="">
                                                        <input type="text" class="form-control impresionText" id="DNI" name="DNI"  maxlength="50" required="">
                                                        <input type="text" class="form-control impresionText" id="Establecimiento" name="Establecimiento"  maxlength="50" required="">
                                                        <input type="text" class="form-control impresionText" id="Cargo" name="Cargo"  maxlength="50" required="">   
                                                    </div>
                                                </div>
                                                <br />
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="col-xs-10">
                                                  
                                                        <label>+aguinald            200.00  </label><br>
                                                        <label>+difpensi               18.90</label><br>
                                                        <label>+basica    50.00 </label><br>
                                                        <label>+reunifica   27.62</label><br>
                                                        <label>+tph        30.30</label><br>
                                                        <label>+ds21    13.69</label><br>
                                                        <label>+ds19   105.00</label><br>
                                                        <label>+du080   127.00</label><br>
                                                        <label>+ael25671   60.00</label><br>
                                                        <label>+aeds081   70.00</label><br>
                                                        <label>+bonesp     18.89</label><br>
                                                       
                                                    </div>
                                                </div> <div class="col-md-4">
                                                    <div class="col-xs-10">
                                                   <label>+igv    17.25</label><br>
                                                        <label>+ds065   100.00</label><br>
                                                        <label>+du90      75.97</label><br>
                                                        <label>+du073      88.12</label><br>
                                                        <label>+du011       102.22</label><br>
                                                        <label>+derrmag       15.50</label><br>
                                                        <label>+afp        107.50</label><br>
                                                        <label>+Cmarequipa     420.20</label><br>

                                                    </div>
                                                </div>
                                                <br />
                                            </div>
                                            <hr>
                                            <label>T-REMUN  00.00  T-DSCTO      000.00  T-LIQUI   00.00</label><br>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 text-center">
                                                    <button id="convertHtmlToPDF" class="btn btn-primary btn-sm convertHtmlToPDF">Imprimir</button>
                                                </div>
                                            </div>
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
                        <script src="https://unpkg.com/jspdf@2.0.0/dist/jspdf.umd.min.js"></script> 
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script> 
                        <script src="js/convertir.js"></script>
                        <script type="text/javascript">
                         document.addEventListener('DOMContentLoaded', () => {
                            const $boton = document.querySelector('#convertHtmlToPDF');
                                $boton.addEventListener('click', () =>{
                                    const $pdfjs = document.querySelector('#ImprimirPDF');
                                    html2pdf()
                                    .set({
                                        margin: 1,
                                        filename: 'pdf.pdf',
                                        html2canvas: {
                                            scale: 3,
                                            letterRendering: true,
                                        },
                                        jsPDF: {
                                            unit: 'in',
                                            format: 'a4',
                                            orientation: 'portrait'
                                        }

                                    })
                                    .from($pdfjs)
                                    .save()
                                    .catch(err => console.log(err));
                                });
                         });
                            //     $(document).on('click', '#convertHtmlToPDF', function(){
                            // converHTMLToPDF();
                            // });
                            // function converHTMLToPDF() {
                            // const { jsPDF } = window.jspdf;
                            // var pdf = new jsPDF('l', 'mm', [1000, 1010]);
                            // var pdfjs = document.querySelector('#ImprimirPDF');
                            // pdf.html(pdfjs, {
                            // callback: function(pdf) {
                            // pdf.save("output.pdf");
                            // },
                            // x: 10,
                            // y: 10
                            // });
                            // }
                            $(function() {

                            

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                var table = $('.data-table').DataTable({
                                    //scrollY: "50vh",
                                    scrollX: "740px",
                                    //scrollCollapse: true,
                                    // paging: false,
                                    responsive: true,
                                    processing: true,
                                    serverSide: true,
                                    exportOptions: {
                                        rows: 'visible'
                                    },
                                    //dom: "Blfrtip",
                                    buttons: [{
                                            text: 'csv',
                                            extend: 'csvHtml5',
                                        },
                                        {
                                            text: 'excel',
                                            extend: 'excelHtml5',
                                        },
                                        {
                                            text: 'pdf',
                                            extend: 'pdfHtml5',
                                        },
                                        {
                                            text: 'print',
                                            extend: 'print',
                                        },
                                    ],
                                    columnDefs: [{
                                        orderable: false,
                                        targets: -1
                                    }],
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
                                    ajax: "{{ route('planilla.index') }}",
                                    columns: [{
                                            data: 'Basico',
                                            name: 'Basico'
                                        },
                                        {
                                            data: 'Personal',
                                            name: 'Personal'
                                        },
                                        {
                                            data: 'Diferencial',
                                            name: 'Diferencial'
                                        },
                                        {
                                            data: 'Familiar',
                                            name: 'Familiar'
                                        },
                                        {
                                            data: 'Contrato',
                                            name: 'Contrato'
                                        },
                                        {
                                            data: 'BonEsp',
                                            name: 'BonEsp'
                                        },
                                        {
                                            data: 'IGV',
                                            name: 'IGV'
                                        },
                                        {
                                            data: 'DS065',
                                            name: 'DS065'
                                        },
                                        {
                                            data: 'DL26504',
                                            name: 'DL26504'
                                        },
                                        {
                                            data: 'DU90',
                                            name: 'DU90'
                                        },
                                        {
                                            data: 'DU073',
                                            name: 'DU073'
                                        },
                                        {
                                            data: 'DU011',
                                            name: 'DU011'
                                        },
                                        {
                                            data: 'SNP',
                                            name: 'SNP'
                                        },
                                        {
                                            data: 'DerraMag',
                                            name: 'DerraMag'
                                        },
                                        {
                                            data: 'SubcafCus',
                                            name: 'SubcafCus'
                                        },
                                        {
                                            data: 'DL20530',
                                            name: 'DL20530'
                                        },
                                        {
                                            data: 'DL19990',
                                            name: 'DL19990'
                                        },
                                        {
                                            data: 'FONAVI',
                                            name: 'FONAVI'
                                        },
                                        {
                                            data: 'DOCENTE_DNI',
                                            name: 'DOCENTE_DNI'
                                        },
                                        {
                                            data: 'ESTABLECIMIENTO_Codmodular',
                                            name: 'ESTABLECIMIENTO_Codmodular'
                                        },
                                        {
                                            data: 'Fecha',
                                            name: 'Fecha'
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
                                    $('#modelHeading').html("Crear Nuevo Planilla");
                                    $('#ajaxModel').modal('show');
                                });
                                $('body').on('click', '.editBook', function() {
                                    var id = $(this).data('id');
                                    console.log(id);
                                    $.get("{{ route('planilla.index') }}" + '/' + id + '/edit', function(data) {
                                        $('#modelHeading').html("Editar");
                                        $('#saveBtn').val("edit-book");
                                        $('#ajaxModel').modal('show');
                                        $('#Basico').val(data.Basico);
                                        $('#Personal').val(data.Personal);
                                        $('#Diferencial').val(data.Diferencial);
                                        $('#Familiar').val(data.Familiar);
                                        $('#Contrato').val(data.Contrato);
                                        $('#BonEsp').val(data.BonEsp);
                                        $('#IGV').val(data.IGV);
                                        $('#DS065').val(data.DS065);
                                        $('#DL26504').val(data.DL26504);
                                        $('#DU90').val(data.DU90);
                                        $('#DU073').val(data.DU073);
                                        $('#DU011').val(data.DU011);
                                        $('#SNP').val(data.SNP);
                                        $('#DerraMag').val(data.DerraMag);
                                        $('#SubcafCus').val(data.SubcafCus);
                                        $('#DL20530').val(data.DL20530);
                                        $('#DL19990').val(data.DL19990);
                                        $('#FONAVI').val(data.FONAVI);
                                        $('#DOCENTE_DNI').val(data.DOCENTE_DNI);
                                        $('#ESTABLECIMIENTO_Codmodular').val(data.ESTABLECIMIENTO_Codmodular);
                                        $('#Fecha').val(data.Fecha);
                                    })
                                });
                                $('body').on('click', '.imprimirBook', function() {
                                    var id = $(this).data('id');
                                    console.log(id);
                                    $.get("{{ route('imprimir.index') }}" + '/' + id + '/edit', function(data) {
                                        console.log(data);
                                        console.log(data.BonEsp);
                                        $('#modelImprimir').html("Imprimir");
                                        $('#ajaxModelImprimir').modal('show');
                                        $('#Nombres').val(data.Nombres);
                                        $('#Apellidos').val(data.Apellidos);
                                        $('#DNI').val(data.DNI);
                                        $('#FechaNacimiento').val(data.FechaNacimiento);
                                        $('#Establecimiento').val(data.Establecimiento);
                                        $('#Celular').val(data.Celular);
                                        $('#Correo').val(data.Correo);
                                        $('#Cargos').val(data.Cargo);
                                        $('#Basicos').val(data.Basico);
                                        $('#Personals').val(data.Personal);
                                        $('#Diferencials').val(data.Diferencial);
                                        $('#Familiars').val(data.Familiar);
                                        $('#Contratos').val(data.Contrato);
                                        $('#BonEsps').val(data.BonEsp);
                                        $('#IGVs').val(data.IGV);
                                        $('#DS065s').val(data.DS065);
                                        $('#DL26504s').val(data.DL26504);
                                        $('#DU90s').val(data.DU90);
                                        $('#DU073s').val(data.DU073);
                                        $('#DU011s').val(data.DU011);
                                        $('#SNPs').val(data.SNP);
                                        $('#DerraMags').val(data.DerraMag);
                                        $('#SubcafCuss').val(data.SubcafCus);
                                        $('#DL20530s').val(data.DL20530);
                                        $('#DL19990s').val(data.DL19990);
                                        $('#FONAVIs').val(data.FONAVI);
                                        $('#DOCENTE_DNIs').val(data.DOCENTE_DNI);
                                        $('#ESTABLECIMIENTO_Codmodulars').val(data.ESTABLECIMIENTO_Codmodular);
                                        $('#Fechas').val(data.Fecha);
                                    })
                                });
                                $('#saveBtn').click(function(e) {
                                    e.preventDefault();
                                    $(this).html('Save');

                                    $.ajax({
                                        data: $('#bookForm').serialize(),
                                        url: "{{ route('planilla.store') }}",
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
                                    confirm("¿Estás seguro de que quieres eliminar?");

                                    $.ajax({
                                        type: "DELETE",
                                        url: "{{ route('planilla.store') }}" + '/' + DNI,
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