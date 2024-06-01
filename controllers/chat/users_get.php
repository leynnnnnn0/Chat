<?php

require_once 'model/chat/Chat.php';
require_once 'database/dbhelper.php';

$results = Chat::getAllUsers($pdo);
?>

<?php foreach ($results as $result => $value): ?>


        <button onclick="setReceiverId(event, <?= $value['id'] ?>)" id="select-conversation-btn" class="flex items-center hover:bg-gray-100 rounded-xl p-2">
        <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
            <?= $value['first_name'][0] ?>
        </div>
        <div class="ml-2 text-sm font-semibold"><?= $value['first_name'] . ' ' . $value['last_name'] ?></div>
        <input type="hidden" name="id" value="<?= $value['id'] ?>">
        <button />


    <?php endforeach; ?>