{{-- herdando o padrão do layout --}}
@extends('site.layout')
@section('title', 'Carrinho')

{{-- usando o mesmo nome que colocamos em site.layout podemos exibir o conteudo desse arquivo dentro do body da pagina site.layout
    ficando uma SPA --}}
@section('conteudo')
    <div class="row container">

        <h5>Carrinho: </h5>



        <table class="striped">
            <thead>
              <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Quantidade</th>
                  <th></th>
              </tr>
            </thead>

            <tbody>
                @foreach ($produtos as $produto)
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
              </tr>
              @endforeach
            </tbody>
          </table>



    </div>

    <div class="row center">
        {{$produtos->links('custom.pagination')}}
    </div>

@endsection
