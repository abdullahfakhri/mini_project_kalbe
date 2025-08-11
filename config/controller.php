<?php

//menampilkan data
function select($query)
{
  //panggilan connection
  global $db;

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_array($result)) {
  $rows[] = $row;
  }

  return$rows;

}

// fungsi create/menambahkan data parameter
function create_m_ca_parameters($post)
{
  global $db;

  $code = $post['code'];
  $description = $post['description'];

  //query create/add data
  $query = "INSERT INTO m_ca_parameters VALUES(null, null, null, null, null, null,'$code', '$description')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

//fungsi update/edit data parameter
function update_m_ca_parameters($post)
{
  global $db;

  $id = $post["id"];
  $code = $post['code'];
  $description = $post['description'];

  //query update/edit data parameter
  $query = "UPDATE m_ca_parameters SET code = '$code', description = '$description' WHERE id = $id";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

//fungsi menghapus data parameter
function delete_m_ca_parameters($id)
{
  global $db;

  //query hapus data
  $query = "DELETE FROM m_ca_parameters WHERE id = $id";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

//fungsi menambah data sample type
function create_m_ca_sample_types($post)
{
  global $db;

  $code = $post['code'];
  $description = $post['description'];
  $createdby = $post['createdby'];

  //query add data
  $query = "INSERT INTO m_ca_sample_types VALUES(null, '$createdby', null, null, null, null,'$code', '$description')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

//fungsi menghapus data sample type
function delete_m_ca_sample_types($id)
{
  global $db;

  //query hapus data
  $query = "DELETE FROM m_ca_sample_types WHERE id = $id";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// fungsi update/edit data sample type
function edit_m_ca_sample_types($post)
{
  global $db;

  $id = $post['id'];
  $code = $post['code'];
  $description = $post['description'];
  $createdby = $post['created_by'];

  //query create/add data sample type
  // $query = "UPDATE m_ca_sample_types SET code = '$code', description = '$description', created_by = '$createdby' WHERE id = $id";
  $query = "UPDATE m_ca_sample_types SET code = '$code', description = '$description', createdby = '$createdby' WHERE id = $id";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}