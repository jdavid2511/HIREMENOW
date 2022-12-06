<?php

class postulacion_VI{

    function __construct(){}

    function postulacion()
    {
    ?>
<!-- Dark table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Table Dark</h4>
            <div class="data-tables datatable-dark">
                <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable3_length"><label>Show <select
                                        name="dataTable3_length" aria-controls="dataTable3"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable3_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="dataTable3"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dataTable3" class="text-center dataTable no-footer dtr-inline collapsed"
                                role="grid" aria-describedby="dataTable3_info" style="width: 1515px;">
                                <thead class="text-capitalize">
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable3" rowspan="1"
                                            colspan="1" style="width: 206px;" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Nombre vacante</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1"
                                            colspan="1" style="width: 388px;"
                                            aria-label="Position: activate to sort column ascending">Fecha postulacion
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1"
                                            colspan="1" style="width: 176px;"
                                            aria-label="Office: activate to sort column ascending">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1"
                                            colspan="1" style="width: 110px;"
                                            aria-label="Age: activate to sort column ascending">fecha inicio</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1"
                                            colspan="1" style="width: 197px;"
                                            aria-label="Start Date: activate to sort column ascending">fecha fin </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="even">
                                        <td tabindex="0" class="sorting_1">TEC DE MANTENIMIENTO DE MAQUINARIA AGRICOLA
                                        </td>
                                        <td>2012/06/10</td>
                                        <td>Pendiente</td>
                                        <td>2012/10/03</td>
                                        <td>2013/10/13</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">FLORISTA</td>
                                        <td>2012/06/08</td>
                                        <td>Pendiente</td>
                                        <td>2012/10/03</td>
                                        <td>2013/10/13</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable3_info" role="status" aria-live="polite">Showing 1
                                to 10 of 11 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable3_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable3_previous"><a
                                            href="#" aria-controls="dataTable3" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable3"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable3"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="dataTable3_next"><a href="#"
                                            aria-controls="dataTable3" data-dt-idx="3" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dark table end -->

<script type="text/javascript" src="datatables/don.js"></script>
<script type="text/javascript" src="datatables/ent.js"></script>

<?php

}
}
?>