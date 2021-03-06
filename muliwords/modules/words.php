<h1>Words</h1>

<?php
   if(!isset($_POST['cat'])){
    $result = $pdo->query('SELECT * FROM words');
    $words = $result->fetchAll();
   }
   else{
    $result = $pdo->prepare('SELECT * FROM words WHERE cat = :cat');
    $result->bindParam(':cat',$_POST['cat']);
    $result->execute();
    $words = $result->fetchAll();
   }
    $result = $pdo->query('SELECT * FROM categories');
    $categories = $result->fetchAll();

?>

<a href="index.php?v=add_word" class="btn btn-primary">Add word</a>

<form method='post'>
<div class="form-group">
    <label >Show by category:</label>
    <select name="cat" class="form-control">
    <?php

foreach($categories as $category){
    echo '<option>';
    echo $category['name'];
    echo '</option>';
}
?>
    </select>
    
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Show</button>
    </div>
</form>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Level</th>
        <th>Category</th>
        <th>Polish</th>
        <th>English</th>
        <th>German</th>
        <th>Dutch</th>
        <th>Spanish</th>
        <th>French</th>
        <th>Italian</th>
    </tr>
    <?php
        foreach($words as $word){
            ?>
            <tr>
                <td><?= $word['id']?></td>
                <td><?= $word['lvl']?></td>
                <td><?= $word['cat']?></td>
                <td><?= $word['pol']?></td>
                <td><?= $word['eng']?></td>
                <td><?= $word['ger']?></td>
                <td><?= $word['ned']?></td>
                <td><?= $word['spa']?></td>
                <td><?= $word['fra']?></td>
                <td><?= $word['ita']?></td>
                <td>
                    <a href="index.php?v=edit_word&id=<?= $word['id']?>" class="btn btn-success">Edit</a>
                </td>
                <td><a href="index.php?v=delete_word&id=<?= $word['id']?>" class="btn btn-danger">Delete</a></td>
            </tr>

    <?php
        }
    ?>

</table>