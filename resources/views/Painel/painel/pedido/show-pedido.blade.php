@extends('adminlte::page')
@section('content')
<section class="content">

    <h1 class = "title-pg">
        <a href="{{route('pedido.index')}}"><span class = "glyphicon glyphicon-circle-arrow-left"></span></a>
        Dados do Pedido: <i>{{$pedido->id ?? 'Novo'}}</i>
    </h1>

    <div class="row" style="align:center">
        <div class="box box-danger">
            <div class="box-body">
                <table class="table table-bordered">
                    <div>
                        <h3 class="box-title">Detalhes do Pedido</h3>
                    </div>
                    <div class="row">
                        <div class="box-body" style="">

                            <div class="col-md-3">
                                <b>Numero do Pedido:</b> {{$pedido->id}}
                            </div>
                            <div class="col-md-3">
                                <b> Cliente:</b> {{$pedido->cliente->nome}}
                            </div>
                            <div class="col-md-4">
                                <b>Data do Pedido:</b> {{ \Carbon\Carbon::parse($pedido->data_pedido)->format('d/m/Y') }}
                            </div>
                            <div class="col-md-3">
                                <b> Descrição:</b> {{$pedido->comentario}}
                            </div>
                            <br>
                            <hr>
                            <div class="col-md-4">
                                <h4><b>Total do Pedido: </b>
                                    <i>{{number_format($pedido->total_pedido, 2)}}</i></h4>
                                </div>
                                {{--  <div class="col-md-4">
                                    <h4><b>Total do Pedido: </b>
                                        <div class="input-group">
                                            <div class="input-group-addon"><b>R$</b></div>
                                            {!!Form::number('total_pedido', $pedido->total_pedido,['class'=>'form-control', 'step'=>'1', 'min'=>'1','required'=>'', 'readonly' => 'true','id'=>'total_pedido']) !!}
                                        </div>
                                    </div>  --}}

                                    <div class="pull-right">
                                        <a href = "{{url('site/painel/item', $pedido->id)}}"  class="btn btn-success pull-right">
                                            <span class = "glyphicon glyphicon-plus"></span> Adicionar item
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </table>
                        <hr>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th><b>Produto</b></th>
                                        <th><b>Quantidade</b></th>
                                        <th><b>Preço Unitário</b></th>
                                        <th><b>Sub Total</b></th>
                                        <th><b>Ações</b></th>
                                    </tr>
                                </thead>
                                @if(isset($items))
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->quantidade}}</td>
                                    <td>{{number_format($item->product->preco, 2)}}</td>
                                    <td>{{number_format($item->sub_total,2)}}</td>
                                    <td class = "td-actions text-center" style="width:15%">
                                        <div>
                                            {{--  <a href="#" >
                                                {{ Form::open(['action' => ['Painel\ItensPedidoController@destroy', $item->id], 'class'=>'form-inline', 'method' => 'DELETE']) }}
                                                {{ Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger', 'type' => 'submit', 'data-toggle'=>'tooltip', 'data-placement' =>'top', 'title' =>'Deletar'] ) }}
                                            </a>  --}}
                                            <a href = "{{url('site/painel/item/del', $item->id)}}"  class="btn btn-warning pull-right">
                                                <span class = "glyphicon"></span> Remover Produto- {{$item->id}}
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </table>
                        </div>
                        <hr>
                        {!! Form::open(['route' => ['pedido.destroy', $pedido->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit("Deletar pedido: $pedido->id", ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
