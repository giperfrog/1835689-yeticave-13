<main class="container">
            <section class="promo">
                <h2 class="promo__title">Нужен стафф для катки?</h2>
                <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
                <ul class="promo__list">
                    <?php foreach ($categories as $category_item) : ?>
                        <li class="promo__item promo__item--<?= $category_item['code']; ?>">
                            <a class="promo__link" href="index.php?category_item_id=<?= $category_item['id']; ?>"><?= htmlspecialchars($category_item['name']); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section class="lots">
                <div class="lots__header">
                    <h2>Открытые лоты</h2>
                </div>
                <ul class="lots__list">

                    <?php foreach ($lots as $lot) : ?>
                        <li class="lots__item lot">
                            <div class="lot__image">
                                <img src="lot.php?id=<?= $lot['id']; ?><?= htmlspecialchars($lot['image']); ?>" width="350" height="260" alt="<?= htmlspecialchars($lot_val['title']); ?>">
                            </div>
                            <div class="lot__info">
                                <span class="lot__category"><?= htmlspecialchars($lot['name']); ?></span>
                                <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?= $lot['id']; ?>"><?= htmlspecialchars($lot['title']); ?></a></h3>
                                <div class="lot__state">
                                    <div class="lot__rate">
                                        <span class="lot__amount">Стартовая цена</span>
                                        <span class="lot__cost"><?= formate_cost($lot['cost']); ?></span>
                                    </div>
                                    <? $res = get_dt_range($lot['dt_add']); ?>
                                    <div class="lot__timer timer <?= ($res < 1) ? 'timer--finishing' : ''; ?>"><?= $res; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </main>