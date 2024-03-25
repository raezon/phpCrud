<?php $this->layout('layout/parent', ['title' => 'Home']) ?>

<section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & up to 70% off!</p>
  </section>


<section id="products1" class="section-p1">
    <?php foreach ($produits as $produit): ?>

    <div class="pro-container">
        <div class="pro" onclick="window.location.href='sproduct.html';">
            <img src="web/assets/img/Products/f1.jpg" alt="">
            <div class="des">
                <span><?=$produit->mark; ?></span>
                <h5><?=$produit->nom; ?></h5>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4><?=$produit->prix; ?> £</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
        </div>
    <?php     endforeach ?>
  
    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

</section>

<section id="newletter" class="section-p1 section-m1">
    <div class="newtext">
        <h4>Sign Up For newletters</h4>
        <p>Get E-mail update about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>