<?php
ob_start();


$products = [
    // Stoves & Burners
    ['name' => 'Single-Burner Gas Stove 100 (Piezo, 2,200 W)',   'category' => 'Stoves & Burners',    'brand' => 'Quechua', 'price' => 149.90, 'image' => ''],
    ['name' => 'Gas Stove with Lighter MT100',                   'category' => 'Stoves & Burners',    'brand' => 'Forclaz', 'price' => 99.90,  'image' => ''],
    ['name' => 'Lightweight Compact Gas Stove MT500',            'category' => 'Stoves & Burners',    'brand' => 'Forclaz', 'price' => 149.90, 'image' => ''],
    ['name' => 'Compact Gas Stove 500 (3,500 W, Offset Gas)',    'category' => 'Stoves & Burners',    'brand' => 'Quechua', 'price' => 299.90, 'image' => ''],
    ['name' => 'Stainless Steel Wood-Burning Bushcraft Stove',   'category' => 'Stoves & Burners',    'brand' => 'Sologna', 'price' => 119.90, 'image' => ''],

    // Cookware Sets
    ['name' => 'Non-Stick Cookset 500 - 2 People (15 pcs)',      'category' => 'Cookware Sets',       'brand' => 'Quechua', 'price' => 199.90, 'image' => ''],
    ['name' => 'Non-Stick Cookset 500 - 4 People (25 pcs)',      'category' => 'Cookware Sets',       'brand' => 'Quechua', 'price' => 249.90, 'image' => ''],
    ['name' => 'Stainless Cooking Set 100 - 2 People (10 pcs)',  'category' => 'Cookware Sets',       'brand' => 'Quechua', 'price' => 74.90,  'image' => ''],
    ['name' => 'Stainless Cooking Set 100 - 4 People (18 pcs)',  'category' => 'Cookware Sets',       'brand' => 'Quechua', 'price' => 124.90, 'image' => ''],
    ['name' => 'Stainless Trekking Cookset MT500 - 2 People',    'category' => 'Cookware Sets',       'brand' => 'Forclaz', 'price' => 124.90, 'image' => ''],
    ['name' => 'Stainless Trekking Cookset MT500 - 1 Person',    'category' => 'Cookware Sets',       'brand' => 'Forclaz', 'price' => 74.90,  'image' => ''],
    ['name' => 'XL Non-Stick Cookset 900 - 4 People (33 pcs)',   'category' => 'Cookware Sets',       'brand' => 'Quechua', 'price' => 499.90, 'image' => ''],

    // Pots & Pans
    ['name' => 'Stainless Frying Pan 500 (1.2 L, 20 cm)',        'category' => 'Pots & Pans',         'brand' => 'Quechua', 'price' => 74.90,  'image' => ''],

    // Kettles & Drinkware
    ['name' => '1 L Stainless Steel Kettle 500',                 'category' => 'Kettles & Drinkware', 'brand' => 'Quechua', 'price' => 64.90,  'image' => ''],
    ['name' => '3-in-1 Coffee Maker, Kettle & Teapot (0.6-0.8 L)','category' => 'Kettles & Drinkware','brand' => 'Quechua', 'price' => 84.90,  'image' => ''],
    ['name' => '0.35 L Stainless Steel Isothermal Mug',          'category' => 'Kettles & Drinkware', 'brand' => 'Quechua', 'price' => 44.90,  'image' => ''],

    // Utensils & Cutlery
    ['name' => '3-Piece Stainless Cutlery Set with Box',         'category' => 'Utensils & Cutlery',  'brand' => 'Quechua', 'price' => 34.90,  'image' => ''],
    ['name' => 'Folding Cutlery Fork & Spoon MT500',             'category' => 'Utensils & Cutlery',  'brand' => 'Forclaz', 'price' => 14.90,  'image' => ''],
    ['name' => 'Ø23 cm Plastic Camping Plate 100',               'category' => 'Utensils & Cutlery',  'brand' => 'Quechua', 'price' => 11.90,  'image' => ''],

    // Cooking Accessories
    ['name' => 'Screw-In Gas Cartridge 450 g',                   'category' => 'Cooking Accessories', 'brand' => 'Forclaz', 'price' => 39.90,  'image' => ''],
];

/* ---------- Promotion slides (looked up by product name) ---------- */
function findProduct(array $products, string $name): array
{
    foreach ($products as $p) {
        if ($p['name'] === $name) {
            return $p;
        }
    }
    return $products[0];
}

$promos = [
    ['product' => findProduct($products, 'Non-Stick Cookset 500 - 4 People (25 pcs)'),  'title' => 'Cook Anywhere, Eat Anywhere', 'text' => 'Complete family cooksets for every adventure'],
    ['product' => findProduct($products, 'Compact Gas Stove 500 (3,500 W, Offset Gas)'), 'title' => 'Hot Meals on the Trail',      'text' => 'Powerful portable stoves, light and reliable'],
    ['product' => findProduct($products, 'Stainless Trekking Cookset MT500 - 2 People'), 'title' => 'Light on Your Back',          'text' => 'Compact trekking cooksets for hikers'],
    ['product' => findProduct($products, '1 L Stainless Steel Kettle 500'),             'title' => 'Fresh Coffee at Sunrise',     'text' => 'Boil water fast with a durable stainless kettle'],
];

/* ---------- Pagination ---------- */
$perPage    = 8;
$totalItems = count($products);
$totalPages = (int) ceil($totalItems / $perPage);
$page       = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$page       = max(1, min($page, $totalPages));
$offset     = ($page - 1) * $perPage;
$pageItems  = array_slice($products, $offset, $perPage);
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="bi bi-tree-fill me-2"> Welcome to the World Beyond the Wild   </h2>
        <p class="text-muted mb-0">TrailForge offers durable, lightweight, and compact camping cookware mess kits designed for outdoor adventures. Perfect for camping, hiking, and travelling, our products make cooking outdoors easy and convenient.</p>
    </div>
</div>

<!-- ===================== PROMOTION (dot carousel) ===================== -->
<div class="card shadow-sm mb-4 overflow-hidden">
    <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-indicators">
            <?php foreach ($promos as $i => $promo): ?>
                <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="<?= $i ?>"
                        class="<?= $i === 0 ? 'active' : '' ?>"
                        <?= $i === 0 ? 'aria-current="true"' : '' ?>
                        aria-label="Slide <?= $i + 1 ?>"></button>
            <?php endforeach; ?>
        </div>

        <div class="carousel-inner">
            <?php foreach ($promos as $i => $promo): ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">

                    <?php if (!empty($promo['product']['image'])): ?>
                        <img src="images/<?= htmlspecialchars($promo['product']['image']) ?>"
                             class="d-block w-100 object-fit-cover"
                             style="height: 250px;"
                             alt="<?= htmlspecialchars($promo['product']['name']) ?>">
                    <?php else: ?>
                        <div class="bg-secondary bg-gradient d-flex align-items-center justify-content-center"
                             style="height: 250px;">
                            <i class="bi bi-image text-white-50 display-1"></i>
                        </div>
                    <?php endif; ?>

                    <div class="carousel-caption text-start pb-5">
                        <span class="badge bg-danger mb-2">PROMOTION</span>
                        <h3><?= htmlspecialchars($promo['title']) ?></h3>
                        <p class="mb-1"><?= htmlspecialchars($promo['text']) ?></p>
                        <strong>
                            <?= htmlspecialchars($promo['product']['brand']) ?>
                            <?= htmlspecialchars($promo['product']['name']) ?>
                            &ndash; RM <?= number_format($promo['product']['price'], 2) ?>
                        </strong>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ===================== RECOMMENDATION BY CATEGORY ===================== -->
<?php
$categories = [
    'Stoves & Burners'    => ['icon' => 'bi-fire',      'advice' => 'Gas stoves with piezo ignition are quick and easy to light. Check the power output and how well the stove copes with wind before you buy.'],
    'Cookware Sets'       => ['icon' => 'bi-bag-check', 'advice' => 'Choose a set that matches your group size. Stainless steel is tough and long-lasting, and non-stick makes cleaning much easier.'],
    'Pots & Pans'         => ['icon' => 'bi-cup-hot',   'advice' => 'A double-bottom pan spreads heat evenly and helps prevent burning. Pick a size that suits your usual meals.'],
    'Kettles & Drinkware' => ['icon' => 'bi-cup-straw', 'advice' => 'Stainless steel handles heat and knocks well. An insulated mug keeps drinks hot for longer on cold mornings.'],
    'Utensils & Cutlery'  => ['icon' => 'bi-egg-fried', 'advice' => 'Folding and nesting items save pack space. Choose stainless steel for durability or plastic for the lightest weight.'],
    'Cooking Accessories' => ['icon' => 'bi-tools',     'advice' => 'Always bring a spare gas cartridge, and make sure it fits your stove before you go.'],
];

// Selected category (validated against the list above)
$category = $_GET['category'] ?? '';
if (!isset($categories[$category])) {
    $category = '';
}
$keep = $category !== '' ? '&category=' . urlencode($category) : '';

// Products in the selected category, cheapest first
$recommended = [];
if ($category !== '') {
    $recommended = array_values(array_filter($products, fn($p) => $p['category'] === $category));
    usort($recommended, fn($a, $b) => $a['price'] <=> $b['price']);
}
?>

<div id="recommend" class="card shadow-sm mb-4">
    <div class="card-body">

        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-stars text-primary me-2"></i>Recommended For You</h5>
                <small class="text-muted">Choose what you are looking for and we will suggest the best products</small>
            </div>
        </div>

        <hr>

        <!-- Category buttons -->
        <div class="d-flex flex-wrap gap-2 mb-4">
            <?php foreach ($categories as $name => $info): ?>
                <a href="?category=<?= urlencode($name) ?>#recommend"
                   class="btn <?= $name === $category ? 'btn-primary' : 'btn-outline-primary' ?>">
                    <i class="bi <?= $info['icon'] ?> me-1"></i><?= htmlspecialchars($name) ?>
                </a>
            <?php endforeach; ?>
            <?php if ($category !== ''): ?>
                <a href="home.php" class="btn btn-outline-secondary"><i class="bi bi-x-circle me-1"></i>Clear</a>
            <?php endif; ?>
        </div>

        <?php if ($category === ''): ?>

            <div class="alert alert-info mb-0">
                <i class="bi bi-hand-index me-2"></i>Select a category above to see our recommended products.
            </div>

        <?php else: ?>

            <div class="alert alert-light border mb-4">
                <strong><i class="bi <?= $categories[$category]['icon'] ?> text-primary me-2"></i>Tip for <?= htmlspecialchars($category) ?>:</strong>
                <?= htmlspecialchars($categories[$category]['advice']) ?>
            </div>

            <div class="row g-3">
                <?php foreach ($recommended as $i => $item): ?>
                    <div class="col-6 col-md-4 col-xl-3">
                        <div class="card h-100 shadow-sm border-primary">

                            <?php if (!empty($item['image'])): ?>
                                <img src="images/<?= htmlspecialchars($item['image']) ?>"
                                     class="card-img-top object-fit-cover"
                                     alt="<?= htmlspecialchars($item['name']) ?>">
                            <?php else: ?>
                                <div class="bg-light border-bottom d-flex align-items-center justify-content-center py-5">
                                    <i class="bi bi-image text-secondary fs-1"></i>
                                </div>
                            <?php endif; ?>

                            <div class="card-body">
                                <?php if (count($recommended) > 1 && $i === 0): ?>
                                    <span class="badge bg-success mb-2">Best Value</span>
                                <?php elseif (count($recommended) > 1 && $i === count($recommended) - 1): ?>
                                    <span class="badge bg-warning text-dark mb-2">Premium Choice</span>
                                <?php else: ?>
                                    <span class="badge bg-primary mb-2"><?= htmlspecialchars($item['brand']) ?></span>
                                <?php endif; ?>
                                <h6 class="card-title mb-1"><?= htmlspecialchars($item['name']) ?></h6>
                                <small class="text-muted d-block mb-1"><?= htmlspecialchars($item['brand']) ?></small>
                                <p class="text-primary fw-bold mb-0">RM <?= number_format($item['price'], 2) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>

    </div>
</div>


<!-- ===================== PRODUCT LIST ===================== -->
<div class="card shadow-sm">
    <div class="card-body">

        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-box-seam text-primary me-2"></i>Our Products</h5>
                <small class="text-muted">Browse our latest camping cookware</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: <?= $totalItems ?> items</span>
            </div>
        </div>

        <hr>

        <div class="row g-3">
            <?php foreach ($pageItems as $item): ?>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="card h-100 shadow-sm">

                        <?php if (!empty($item['image'])): ?>
                            <img src="images/<?= htmlspecialchars($item['image']) ?>"
                                 class="card-img-top object-fit-cover"
                                 alt="<?= htmlspecialchars($item['name']) ?>">
                        <?php else: ?>
                            <div class="bg-light border-bottom d-flex align-items-center justify-content-center py-5">
                                <i class="bi bi-image text-secondary fs-1"></i>
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <span class="badge bg-primary mb-2"><?= htmlspecialchars($item['brand']) ?></span>
                            <h6 class="card-title mb-1"><?= htmlspecialchars($item['name']) ?></h6>
                            <small class="text-muted d-block mb-1"><?= htmlspecialchars($item['category']) ?></small>
                            <p class="text-primary fw-bold mb-0">RM <?= number_format($item['price'], 2) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <nav class="mt-4" aria-label="Product pages">
            <ul class="pagination justify-content-center mb-0">
                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?><?= $keep ?>">&laquo;</a>
                </li>
                <?php for ($p = 1; $p <= $totalPages; $p++): ?>
                    <li class="page-item <?= $p === $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $p ?><?= $keep ?>"><?= $p ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?><?= $keep ?>">&raquo;</a>
                </li>
            </ul>
        </nav>

    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>