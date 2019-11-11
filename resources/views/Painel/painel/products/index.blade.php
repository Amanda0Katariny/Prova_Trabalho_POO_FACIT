@extends('adminlte::page')
@section('content')

<section class="content">
    <h1 class = "title-pg">Tabela de Produtos</h1>

    <div class="row" style="align:center">
        <div class="box box-danger">
            <div class="box-header with-border">
                <div class="col-md-6">
                    <div class="input-group">
                        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Clientes">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="pull-right">
                    <a href="{{route('produtos.create')}}" class="btn btn-success pull-right h2">
                        <span class = "glyphicon glyphicon-plus"></span> Cadastrar
                    </a>
                </div>
            </div>

            <div class="box-body">
                <table class="table table-bordered" class ="table">
                    <thead class="thead-light">
                        <tr>
                            <th> Código </th>
                            <th> Nome </th>
                            <th> Preço </th>
                            <th> Descrição </th>
                            <th style="width:40px ; text-align:center"> Ações </th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{number_format($product->preco, 2)}}</td>
                        <td>{{$product->description}}</td>

                        <!-- #a href = "{{url("/painel/produtos/{$product->id}/edit")}}" class = "actions edit">
                            # <span class = "glyphicon glyphicon-pencil"></span>
                            # </a>
                        -->

                        <td class = "td-actions text-center" style="width:15%">

                            <a href="{{route('produtos.edit', $product->id)}}" class="btn btn-info" data-toggle="" data-placement="top" title ="Editar">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href = "{{route('produtos.show', $product->id)}}"  class="btn btn-warning" data-toggle="tooltip" data-placement="top" title ="Vizualizar">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" >
                                {{ Form::open(['action' => ['Painel\ProdutoController@destroy', $product->id], 'class'=>'form-inline', 'method' => 'DELETE']) }}
                                {{ Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger', 'type' => 'submit', 'data-toggle'=>'tooltip', 'data-placement' =>'top', 'title' =>'Deletar'] ) }}
                                {!! Form::close() !!}
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $products->links() !!}
            </div>
        </div>
    </div>

    <!-- //1º metodo <a href="{{url('/site/painel/produtos/create')}}" class = "btn btn-danger btn-add">
        //<span class = "glyphicon glyphicon-plus"></span> Cadastrar </a>
    -->
</section>
@include('layouts.utilities.modal_excluir', ['modal'=>'modalConfirmDelete', 'idForm'=>'modalConfirmDelete', 'message'=>'Você tem certeza que deseja Apagar este Registro!'])
@endsection

