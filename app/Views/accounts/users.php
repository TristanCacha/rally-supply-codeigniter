<?= view('partials/header', ['title' => $title]) ?>

<section class="list-page wrap">
    <div class="list-heading">
        <div>
            <p class="eyebrow"><span class="eyebrow-line"></span> THE PEOPLE BEHIND THE COUNTER</p>
            <h1>Our shop<br><em>team.</em></h1>
        </div>
        <div class="list-aside">
            <span class="count-badge"><?= count($users) ?> TEAMMATES</span>
            <p>Players first, product nerds always. Say hi when you stop by.</p>
            <a class="text-link" href="<?= site_url('customers') ?>">View the community <span>→</span></a>
        </div>
    </div>

    <div class="table-wrap">
        <table class="account-table">
            <thead>
                <tr><th>TEAMMATE</th><th>USERNAME</th><th>ROLE</th><th>STATUS</th></tr>
            </thead>
            <tbody>
    <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td>
                        <span class="row-number">0<?= $index + 1 ?></span>
                        <span class="person-mark person-mark-<?= $index % 5 ?>"><?= esc(strtoupper(substr($user['name'], 0, 1))) ?></span>
                        <strong><?= esc($user['name']) ?></strong>
                    </td>
                    <td><span class="username">@<?= esc($user['username']) ?></span></td>
                    <td><?= esc($user['role']) ?></td>
                    <td><span class="status-tag"><i></i> On the court</span></td>
                </tr>
    <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <p class="table-note"><span>✳</span> SAMPLE ROSTER · STAFF DATA IS STORED IN A PHP ARRAY FOR THIS FIRST VERSION.</p>
</section>

<?= view('partials/footer') ?>
