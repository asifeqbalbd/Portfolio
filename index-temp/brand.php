<div class="barnd-area pt-100 pb-100">
    <div class="container">
        <div class="row brand-active">
            <?php
                $select_brand = "SELECT * FROM brand";
                $beand_query = mysqli_query($db, $select_brand);
                foreach ($beand_query as $key => $value) {
            ?>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="images/brand/<?= $value['images']?>" alt="img">
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>