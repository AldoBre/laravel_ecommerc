{{-- herdando o padrão do layout --}}
@extends('site.layout')
@section('title', 'Detalhes')

{{-- usando o mesmo nome que colocamos em site.layout podemos exibir o conteudo desse arquivo dentro do body da pagina site.layout
    ficando uma SPA --}}
@section('conteudo')

    <div class="row container"> <br/>
        <div class ="col s12 m6">
         <img src="{{$produto->imagem}}" alt="" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h4>{{$produto->nome}}</h4>
            <h4>R$ {{number_format($produto->preco, 2, ',','.')}}</h4>
            <p>{{$produto->description}}</p>
            <p>Postado por {{$produto->user->name}}
            <br>
                Categoria: {{$produto->categoria->name}}
            </p>
            <form method="post" action="{{route('site.addCarrinho')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}" />
                <input type="hidden" name="name" value="{{$produto->nome}}" />
                <input type="hidden" name="price" value="{{$produto->preco}}" />
                <input type="number" name="quantity" value="1" />
                <input type="hidden" name="img" value="{{$produto->imagem}}" />

            <button class="btn orange btn-large">Comprar</button>
            </form>
        </div>
    </div>

@endsection

{{-- aula 47--}}
