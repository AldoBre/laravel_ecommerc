{{-- herdando o padrão do layout --}}
@extends('site.layout')
@section('title', 'essa é a pagina home')

{{-- usando o mesmo nome que colocamos em site.layout podemos exibir o conteudo desse arquivo dentro do body da pagina site.layout
    ficando uma SPA --}}
@section('conteudo')
    <div class="row container">

        <h5>Categoria: {{$categoria->name}} </h5>

        @foreach ($produtos as $produto)

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                  <img src="{{$produto->imagem}}">
                  <a href="{{ route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title">{{Str::limit($produto->nome,20)}}</span>
                  <p>{{Str::limit($produto->description, 30) }}</p>
                </div>
              </div>
        </div>

        @endforeach

    </div>

    <div class="row center">
        {{$produtos->links('custom.pagination')}}
    </div>

@endsection
