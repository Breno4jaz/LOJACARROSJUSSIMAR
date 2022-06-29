<div class="container-fluid">

    <h1 class="mt-3"> <?= $title ?> </h1>

    <table class="table">
        <tr>
            <td>Modelo:</td>
            <td>Marca</td>
            <td>Cor</td>
            <td>Placa</td>
            <td></td>
            <td></td>
        </tr>
        <?php

        foreach ($carros as $carro_item) {
        ?>
            <tr>
                <td><?= $carro_item['modelo']  ?></td>
                <td><?= $carro_item['marca']  ?></td>
                <td><?= $carro_item['cor']  ?></td>
                <td><?= $carro_item['placa']  ?></td>
                <td> <a href="excluir/carro/<?=$carro_item['id']?>" class="btn btn-danger">Apagar </a></td>
                <td> <a href="editar/carro/<?=$carro_item['id']?>" class="btn btn-warning">Editar</a></td>
            </tr>

        <?php
        }

        ?>

    </table>
</div>