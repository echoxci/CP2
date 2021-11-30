<header class="masthead py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-white">Dosky</h1>
            <hr class="divider">
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach($data as $boards): ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="public/assets/img/<?= $boards->img_path ?>" alt="<?= $boards->name ?>"/>
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder"><?= $boards->name ?></h5>
                            <?= $boards->description ?>
                            <p><?= $boards->price ?> &euro;</p>
                        </div>
                    </div>
                    <div class="card-footer row p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center col"><a class="btn btn-outline-dark mt-auto">Upraviť</a></div>
                        <div class="text-center col"><a class="btn btn-outline-dark mt-auto">Zmazať</a></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div align="right">
            <button class="btn btn-new-product" data-bs-toggle="modal" data-bs-target="#to-new-product">Pridať produkt</button>
            <button class="btn btn-new-product">Vymazať celu kategoriu</button>
        </div>
    </div>
</section>


<!--NEW PRODUCT MODAL-->
<div id="to-new-product" class="modal fade" role="dialog" style="display: none;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-name" class="modal-title" align="center">Pridaj novy produkt</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label for="input-new-product-name">Nazov produktu</label>
                    <input type="text" id="input-new-product-name">
                    <label for="input-new-product-description">Popis produktu</label>
                    <input type="text" id="input-new-product-description">
                    <label for="input-new-product-price">Cena produktu</label>
                    <input type="text" id="input-new-product-price">
                    <label for="input-new-product-img">Nazov obrazku v zlozke</label>
                    <input type="text" id="input-new-product-img">
                </div>
            </div>
            <div class="modal-footer form-group">
                <div class="text-center">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Zatvoriť</button>
                    <button id="add-product" type="button" class="btn btn-outline-dark">Pridať produkt</button>
                </div>
            </div>
        </div>
    </div>
</div>