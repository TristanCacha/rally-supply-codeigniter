<?= view('partials/header', ['title' => $title]) ?>

<section class="shop-hero wrap">
    <div>
        <p class="eyebrow"><span class="eyebrow-line"></span> THE RALLY SUPPLY COLLECTION</p>
        <h1>Good gear for<br><em>every rally.</em></h1>
        <p class="shop-lede">Find your paddle, dial in your setup, and get everything you need to feel at home on court.</p>
    </div>
    <aside class="shop-note"><span class="shop-note-mark">✳</span><p>Thoughtful picks.<br>More time in the game.</p></aside>
</section>

<section class="shop-catalog wrap" aria-labelledby="catalog-heading">
    <div class="catalog-topline">
        <div>
            <p class="eyebrow">EQUIPMENT FOR THE EVERYDAY COURT</p>
            <h2 id="catalog-heading">The collection <span>· <?= count($products) ?> picks</span></h2>
        </div>
    </div>

    <nav class="shop-filters" aria-label="Filter products by category">
        <?php foreach ($filters as $filterKey => $filterLabel): ?>
            <?php $filterUrl = site_url('shop') . ($filterKey === 'all' ? '' : '?category=' . rawurlencode($filterKey)); ?>
            <a
                class="filter-button <?= $activeFilter === $filterKey ? 'is-active' : '' ?>"
                href="<?= esc($filterUrl) ?>"
                <?= $activeFilter === $filterKey ? 'aria-current="page"' : '' ?>
            >
                <?= esc($filterLabel) ?>
            </a>
        <?php endforeach ?>
    </nav>

    <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <article class="product-card" data-category="<?= esc($product['filter']) ?>">
                <div class="product-image-wrap">
                    <img class="product-image" src="<?= base_url('assets/images/' . $product['image']) ?>" alt="<?= esc($product['alt']) ?>" loading="lazy">
                    <span class="product-badge"><?= esc($product['badge']) ?></span>
                    <span class="product-category"><?= esc($product['category']) ?></span>
                </div>
                <div class="product-info">
                    <div class="product-name-row">
                        <h3><?= esc($product['name']) ?></h3>
                        <span class="product-price">₱<?= number_format($product['price']) ?></span>
                    </div>
                    <p><?= esc($product['description']) ?></p>
                    <label class="product-option-label">
                        <span><?= esc($product['optionLabel']) ?></span>
                        <select aria-label="<?= esc($product['optionLabel'] . ' for ' . $product['name']) ?>">
                            <?php foreach ($product['options'] as $option): ?>
                                <option><?= esc($option) ?></option>
                            <?php endforeach ?>
                        </select>
                    </label>
                </div>
            </article>
        <?php endforeach ?>
    </div>
    <p class="catalog-disclaimer">Sample catalog for the project demo. Prices shown in Philippine pesos.</p>
</section>

<section class="shop-callout wrap">
    <div><p class="eyebrow">NOT SURE WHERE TO START?</p><h2>Pick your feel.<br><em>We'll help from there.</em></h2></div>
    <a class="button button-dark" href="<?= site_url('about') ?>">Meet Rally Supply <span>↗</span></a>
</section>

<?= view('partials/footer') ?>
</main>
