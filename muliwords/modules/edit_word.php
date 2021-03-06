<?php
    
    if(isset($_POST['pol'])){
        $cat_arr = explode(" ",$_POST['cat']);
        $cat = $cat_arr[0];
        $lvl = $cat_arr[1];
        $result = $pdo->prepare('UPDATE words SET lvl = :lvl, cat = :cat, pol = :pol, eng = :eng, ger = :ger, ned = :ned, spa = :spa, fra = :fra, ita = :ita WHERE id = :id');

        $result->bindParam(':lvl',$lvl);
        $result->bindParam(':cat',$cat);
        $result->bindParam(':pol',$_POST['pol']);
        $result->bindParam(':eng',$_POST['eng']);
        $result->bindParam(':ger',$_POST['ger']);
        $result->bindParam(':ned',$_POST['ned']);
        $result->bindParam(':spa',$_POST['spa']);
        $result->bindParam(':fra',$_POST['fra']);
        $result->bindParam(':ita',$_POST['ita']);
        $result->bindParam(':id', $_GET['id']);
        $result->execute(); //odparcie sql injection

        header('location: index.php?v=words');
    }
    if(!isset($_GET['id'])){
        header('location: index.php?v=words');
    }

    $result = $pdo->prepare('SELECT * FROM words WHERE id = :id');
    $result->bindParam('id', $_GET['id']);
    $result-> execute();
    $word = $result->fetch();
   
    $result = $pdo->prepare('SELECT * FROM categories');
    $result->execute();
    $categories = $result->fetchAll();
    
    

?>

<h1>Edit words</h1>

<form method="post">
<div class="form-group">
    <label for="">Polish:</label>
    <input type="text" name="pol" value="<? echo $word['pol']; ?>" class="form-control">
    <label for="">English:</label>
    <input type="text" name="eng" value="<? echo $word['eng']; ?>" class="form-control">
    <label for="">German:</label>
    <input type="text" name="ger" value="<? echo $word['ger']; ?>" class="form-control">
    <label for="">Dutch:</label>
    <input type="text" name="ned" value="<? echo $word['ned']; ?>" class="form-control">
    <label for="">Spanish:</label>
    <input type="text" name="spa" value="<? echo $word['spa']; ?>" class="form-control">
    <label for="">French:</label>
    <input type="text" name="fra" value="<? echo $word['fra']; ?>" class="form-control">
    <label for="">Italian:</label>
    <input type="text" name="ita" value="<? echo $word['ita']; ?>" class="form-control">
</div>



<div class="form-group">
    <label>Category</label>
    <select name="cat" class="form-control">
        <?php
                echo '<option>'.$word['cat'].' ' .$word['lvl'].'</option>';
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
    <button class="btn btn-primary">Zapisz</button>
</div>
</form>