<?php
if(isset($_POST['pol'])){
   
        $cat_arr = explode(" ",$_POST['cat']);
        $cat = $cat_arr[0];
        $lvl = $cat_arr[1];
    print_r($cat_arr);

    $result = $pdo->prepare('INSERT INTO words (lvl, cat, pol, eng, ger, ned, spa, fra, ita) VALUES(:lvl, :cat, :pol, :eng, :ger, :ned, :spa, :fra, :ita)');
    $result->bindParam(':lvl',$lvl);
    $result->bindParam(':cat',$cat);
    $result->bindParam(':pol',$_POST['pol']);
    $result->bindParam(':eng',$_POST['eng']);
    $result->bindParam(':ger',$_POST['ger']);
    $result->bindParam(':ned',$_POST['ned']);
    $result->bindParam(':spa',$_POST['spa']);
    $result->bindParam(':fra',$_POST['fra']);
    $result->bindParam(':ita',$_POST['ita']);
    $result->execute();

    header('Location: index.php?v=words');
}

$result = $pdo->query('SELECT * FROM categories');
$categories= $result->fetchAll();


?>

<h1>Add Words</h1>

<form method='post'>
<div class="form-group">
    <label >Category</label>
    <select name="cat" class="form-control">
        <?php
            foreach($categories as $category){
                $lvl = $category['lvl'];
                echo '<option>';
                echo $category['name'] .' '.$lvl.'';
                echo '</option>';
            }
        ?>
    </select>
    
    </div>
    
<div class="form-group">
    <label >POL</label>
    <input type="text" name="pol" class="form-control">
    <label >Eng</label>
    <input type="text" name="eng" class="form-control">
    <label >GER</label>
    <input type="text" name="ger" class="form-control">
    <label >NED</label>
    <input type="text" name="ned" class="form-control">
    <label >SPA</label>
    <input type="text" name="spa" class="form-control">
    <label >Fra</label>
    <input type="text" name="fra" class="form-control">
    <label >Ita</label>
    <input type="text" name="ita" class="form-control">

    </div>



    
    

    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>