@extends('index.classic')

@include('components.carregaCssPadrao')
@section('content')
  @include('components.alert-cart-item-remove')

  <!-- Cart Section -->
  <div id="doc" class="bg-light">
    <div class="container space-2">
      <!-- Title -->
      <div class="mb-6">
        <h1 class="h2 font-weight-normal mb-1">Meu Carrinho</h1>
        <p>Itens guardados por 60 minutos.</p>
      </div>
      <!-- End Title -->

      <form>
        <!-- Table Content -->
        <div class="table-responsive-sm mb-6">
          <table class="table table-borderless bg-white mb-0">
            <thead>
              <tr>
                <th>Produtos</th>
                <th>Quantidade</th>
                <th>Preço unitário</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <!-- Item Content -->
              @foreach ($produtos as $item)
            <tr id="{{@$item['id_row']}}">
                <td>
                  <div class="media align-items-center">
                    <div class="u-avatar mr-3">
                      <img class="img-fluid rounded" src="../../assets/img/100x100/img14.jpg" alt="Image Description">
                    </div>
                    <div class="media-body">
                    <h2 class="h6 mb-0">{{@$item['nome']}}</h2>
                    <small class="d-block text-secondary">
                      {{@$item['id_categoria'] == 1 ? "Fitness" : (@$item['id_categoria'] == 2 ? "Especial" : "Tradicional" )}}
                    </small>
                    </div>
                  </div>
                </td>
                <td class="align-middle">
                  <div class="js-quantity input-group u-quantity">
                    <input class="js-result form-control u-quantity__input" type="text" value="1">
                    <div class="u-quantity__arrows">
                      <span class="js-plus u-quantity__arrows-inner fas fa-angle-up"></span>
                      <span class="js-minus u-quantity__arrows-inner fas fa-angle-down"></span>
                    </div>
                  </div>
                </td>
                <td class="align-middle">{{@$item['preco']}}</td>
                <td class="align-middle text-center">
                  <button onclick="destroyRow({{json_encode(@$item)}}, event)" type="button" class="close float-none">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </td>
              </tr>
              @endforeach
              <!-- End Item Content -->
            </tbody>
          </table>
        </div>
        <!-- End Table Content -->

        <div class="row justify-content-lg-between">
          <!-- Delivery -->
          <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
            <div class="card border-0 mb-1">
              <div class="card-body p-3">
                <div class="custom-control custom-radio d-flex align-items-center small text-muted">
                  <input type="radio" class="custom-control-input" id="deliveryRadio1" name="deliveryRadio" checked>
                  <label class="custom-control-label ml-1" for="deliveryRadio1">
                    <span class="d-block h6 text-dark font-weight-normal mb-1"><span class="font-weight-semi-bold">R$5,00</span> - Standard delivery</span>
                    <span class="d-block">Entrega em 5-6 dias úteis.</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- End Delivery -->
          <!-- Total -->
          <div class="col-md-6 col-lg-5 align-self-end">
            <div class="media">
              <div class="mr-4">
                <h3 id="total_preco" ref="{{@$valor_total}}" class="h5 mb-0">Total: R$ {{@$valor_total}},00</h3>
                <p class="small mb-0">Possui um código de cupom? Aplique na próxima etapa.</p>
              </div>
              <div class="media-body">
                <a id="btn-checkout" class="btn btn-primary transition-3d-hover" href="{{route('carrinho.checkout', ['valor_total' => @$valor_total])}}">Comprar</a>
              </div>
            </div>
          </div>
          <!-- End Total -->
        </div>
      </form>
    </div>
  </div>
  <!-- End Cart Section -->
  
  @include('components.carregaJS')

<script type="text/javascript">
  $(document).on('ready', function() {

    
  });

  function destroyRow(item, event) {
    event.preventDefault();
    var row = '#' + item.id_row; // a row é identificada pelo id_row
    var total = parseFloat(JSON.parse(document.getElementById('total_preco').getAttribute('ref')));
    var total_antes = total;
    var preco_remove = parseFloat(removeChars(item.preco));
    
    total -= preco_remove;
    
    var total_str = changeChars(total.toString());
    
    document.getElementById('total_preco').removeAttribute('ref');
    document.getElementById('total_preco').setAttribute('ref', total);
    document.getElementById('total_preco').innerHTML = `Total: R$ ${total_str}`;
    $(row).remove();

    $.ajax({
        type: 'GET',
        url: '{{route("carrinho.atualizar")}}', 
        data: {item:item, valor_total: total},
        success: function(result) {
          if(result.success) {
            $('#alert-suc').addClass('active');
            $('#alert-suc').find('.close-alert').click(function(e) {
              $('#alert-suc').removeClass('active');
            });
          }
        }
    });

    if(total == 0) {
      $('#btn-checkout').addClass('disabled');
    }
  }

  function removeChars(str) {
    var aux = new String;
    for (let i = 0; i < str.length; i++) {
      if(str[i] != 'R' && str[i] != '$' && str[i] != ' ') {
        str[i] == ',' ? aux += '.' : aux += str[i];
      }
    }

    return aux;
  }

  function changeChars(str) {
    var aux = new String;
    var hasAfter = false;
    for (let i = 0; i < str.length; i++) {
      if(str[i] == '.') {
        hasAfter = true;
        aux += ',';
      }
      else {
        aux += str[i];
        if(i == str.length - 1) {
          if(!hasAfter) {
            aux += ',00';
          }
        }
      }
    }

    return aux;
  }

</script>

@endsection

