<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Category.php';

  //Link for read http://localhost/learn/restblog/api/post/read_single.php?id=1

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $category = new Category($db);

  // Get ID
  $category->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $category->read_single();

  // Create array
  $car_arr = array(
    'id' => $category->id,
    'name' => $category->name,
    'created_at' => $category->created_at,
  );

  //Make JSON
  print_r(json_encode($cat_arr));