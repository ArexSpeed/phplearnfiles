<?php

function csv(array $headerFields, array $records, string $filename, string $delimiter = ','){
  //file pointer
  $f = fopen('php://memory', 'w');
  //set column headers
  fputcsv($f, $headerFields, $delimiter);

  foreach($records as $row){
    fputcsv($f, array_values($row), $delimiter);
  }

  //move back to beginning of file
  fseek($f, 0);

  //set headers to download file rather than displayed
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="'.$filename.'";');

  //output all remaining data on a file pointer
  fpassthru($f);
}


//Usage function
$filename = 'test.csv';
$headerFields = array('First Name', 'Last Name', 'Company', 'Challenge 1', 'Challenge 2', 'Challenge 3', 'Created');

$records = [];
foreach($contacts as $row) {
  $records[] = array(
    $row->firstName,
    $row->lastName,
    $row->companyName,
    $row->challenge1,
    $row->challenge2,
    $row->challenge3,
    $row->created_at
  );
}

csv($headerFields, $records, $filename);