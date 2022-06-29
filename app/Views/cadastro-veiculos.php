<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Cadastro de Veículos</h2>
        </div>
    </div>

    <form method="POST" action="gravarCarros">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="mt-1">Modelo: </label>
                    <input type="text" class="form-control" name="modelo"
                    value="<?= isset($carro['modelo']) ? $carro['modelo'] : "" ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Marca: </label>
                    <input type="text" class="form-control" name="marca"
                    value="<?= isset($carro['marca']) ? $carro['marca'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Cor: </label>
                    <input type="text" class="form-control" name="cor"
                    value="<?= isset($carro['cor']) ? $carro['cor'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Placa: </label>
                    <input type="text" class="form-control" name="placa"
                    value="<?= isset($carro['placa']) ? $carro['placa'] : "" ?>">
                </div>
            </div>
        </div>
    </div>
        <input type="hidden" name="id"
        value="<?= isset($carro['id']) ? $carro['id'] : "" ?>">
        <div class="row">
            <div class="col-6 offset-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
        </div>
    </form>
</div>