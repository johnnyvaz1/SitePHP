@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pagina {{ $page->id }} - {{ $page->menu }} </div>
                    <div class="card-body">

                        <a href="{{ url('/page/pages') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/page/pages/' . $page->id . '/edit') }}" title="Edit Page"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $page->id }}</td>
                                    </tr>
                                    <tr><th> Titulo </th><td> {{ $page->titulo }} </td></tr><tr><th> Menu </th><td> {{ $page->menu }} </td></tr><tr><th> Body </th><td> {{ $page->body }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
