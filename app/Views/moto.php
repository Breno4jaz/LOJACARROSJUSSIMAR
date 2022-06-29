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

        foreach ($motos as $moto_item) {
        ?>
            <tr>
                <td><?= $moto_item['modelo']  ?></td>
                <td><?= $moto_item['marca']  ?></td>
                <td><?= $moto_item['cor']  ?></td>
                <td><?= $moto_item['placa']  ?></td>
                <td> <a href="excluir/moto<?=$moto_item['id']?>" class="btn btn-danger">Apagar </a></td>
                <td> <a href="editar/moto<?=$moto_item['id']?>" class="btn btn-warning">Editar</a></td>
            </tr>

        <?php
        }

        ?>

    </table>
</div>