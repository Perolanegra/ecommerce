<form method="POST" action="{{ route('produto.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="id_categoria">Categoria:</label>
        <input type="text" class="form-control" name="id_categoria"/>
    </div>
    <div class="form-group">    
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome"/>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" name="descricao"/>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="image">Selecione a Foto:</label>
            <input type="file" name="image" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="valor_pequeno">Preço Pequeno:</label>
        <input type="number" class="form-control" name="valor_pequeno"/>
    </div>

    <div class="form-group">
        <label for="valor_medio">Preço Médio:</label>
        <input type="number" class="form-control" name="valor_medio"/>
    </div>

    <div class="form-group">
        <label for="valor_grande">Preço Grande:</label>
        <input type="number" class="form-control" name="valor_grande"/>
    </div>

    <button type="submit" class="btn btn-primary-outline">Cadastrar Produto</button>
</form>