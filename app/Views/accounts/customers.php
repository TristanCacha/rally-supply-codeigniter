<?= view('partials/header', ['title' => $title]) ?>

<section class="list-page wrap">
    <div class="list-heading">
        <div>
            <p class="eyebrow"><span class="eyebrow-line"></span> THE RALLY ROSTER</p>
            <h1>Customer<br><em>accounts.</em></h1>
        </div>
        <div class="list-aside">
            <span class="count-badge"><?= count($customers) ?> PLAYERS</span>
            <p>A friendly face makes every visit better. Here are a few from our community.</p>
            <a class="text-link" href="<?= site_url('users') ?>">View the crew <span>→</span></a>
        </div>
    </div>

    <div class="table-wrap">
        <table class="account-table">
            <thead>
                <tr><th>PLAYER</th><th>EMAIL</th><th>PHONE</th><th>STATUS</th></tr>
            </thead>
            <tbody>
    <?php foreach ($customers as $index => $customer): ?>
                <tr>
                    <td>
                        <span class="row-number">0<?= $index + 1 ?></span>
                        <span class="person-mark person-mark-<?= $index % 5 ?>"><?= esc(strtoupper(substr($customer['name'], 0, 1))) ?></span>
                        <strong><?= esc($customer['name']) ?></strong>
                    </td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                    <td><span class="status-tag"><i></i> Rally regular</span></td>
                </tr>
    <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <p class="table-note"><span>✳</span> SAMPLE ROSTER · ACCOUNT DATA IS STORED IN A PHP ARRAY FOR THIS FIRST VERSION.</p>
</section>

<?= view('partials/footer') ?>
