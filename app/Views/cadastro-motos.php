<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Cadastro de Motos</h2>
        </div>
    </div>

    <form method="POST" action="gravarMotos">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="mt-1">Modelo: </label>
                    <input type="text" class="form-control" name="modelo"
                    value="<?= isset($moto['modelo']) ? $moto['modelo'] : "" ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Marca: </label>
                    <input type="text" class="form-control" name="marca"
                    value="<?= isset($moto['marca']) ? $moto['marca'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Cor: </label>
                    <input type="text" class="form-control" name="cor"
                    value="<?= isset($moto['cor']) ? $moto['cor'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Placa: </label>
                    <input type="text" class="form-control" name="placa"
                    value="<?= isset($moto['placa']) ? $moto['placa'] : "" ?>">
                </div>
            </div>
        </div>
    </div>
        <input type="hidden" name="id"
        value="<?= isset($moto['id']) ? $moto['id'] : "" ?>">
        <div class="row">
            <div class="col-6 offset-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </div>
        </div>
    </form>
</div>