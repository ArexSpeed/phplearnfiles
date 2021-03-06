<?php
if(isset($_POST['name'])){

    $result = $pdo->prepare('INSERT INTO categories (lvl,name) VALUES(:lvl,:name)');
    $result->bindParam(':name',$_POST['name']);
    $result->bindParam(':lvl',$_POST['lvl']);
    $result->execute();

    header('Location: index.php?v=categories');


}


?>

<h1>Dodawanie kategorii</h1>

<form method='post'>
<div class="form-group">
        <label>Level</label>
        <select name="lvl">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>

    <div class="form-group">
    <label >Category Name</label>
    <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn-btn-primary">Zapisz</button>
    </div>
</form>