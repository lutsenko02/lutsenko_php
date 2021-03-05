<style>
    form {
        margin-top: 10px;
    }
</style>

<form action="/" method="POST">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <input type="text" name="name" value="<?= $data['name'] ?? "" ?>">
        <select name="category_id">
            <?php foreach ($categories as $cat) { ?>
                <option value="<?=$cat['id']?>" 
                    <?= ($cat['id'] == $data['category_id']) ? "selected" : ""?> 
                ><?=$cat['name']?></option>
            <?php } ?>
        </select>
        <button type="submit"><?= $data['id'] ? "Сохранить" : "Создать"?>
        </button>
</form>
