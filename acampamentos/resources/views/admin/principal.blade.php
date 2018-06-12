@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>PRINCIPAL ADMIN</h1>
@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Inscritos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                        <label>Show 
                            <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="10">
                                    10
                                </option>
                                <option value="25">
                                    25
                                </option>
                                <option value="50">
                                    50
                                </option>
                                <option value="100">
                                    100
                                </option>
                            </select> entries
                        </label>
                    </div>
                </div>
                <div class="col-sm-6"><div id="example1_filter" class="dataTables_filter">
                        <label>Pesquisar:
                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">
                                    ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">
                                    NOME
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">
                                    TELEFONE
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @if($campista)
                            @foreach($campista as $campista)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{$campista->idcampista}}</td>
                                <td>{{$campista->nomeSobrenome}}</td>
                                <td>{{$campista->telefone}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
<!--                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">
                                    Rendering engine
                                </th>
                                <th rowspan="1" colspan="1">
                                    Browser</th>
                                <th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                        </tfoot>-->
                    </table>
                </div>
            </div>
<!--            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                        Showing 1 to 25 of 57 entries
                    </div>
                        
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">
                                    Previous</a>
                            </li>
                            <li class="paginate_button active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">
                                    1</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">
                                    2
                                </a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">
                                    3
                                </a>
                            </li>
                            <li class="paginate_button next" id="example1_next">
                                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <!-- /.box-body -->
</div>
@stop
