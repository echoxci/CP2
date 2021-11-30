<header class="masthead py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-white">Trucky</h1>
            <hr class="divider">
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach($data as $skate): ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="public/assets/img/<?= $skate->img_path ?>" alt="<?= $skate->name ?>"/>
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder"><?= $skate->name ?></h5>
                            <?= $skate->description ?>
                            <p><?= $skate->price ?> &euro;</p>
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
            <button class="btn btn-new-product">Pridať produkt</button>
            <button class="btn btn-new-product">Vymazať celu kategoriu</button>
        </div>
    </div>
</section>