<?php

function select($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] =  $row;
    }

    return $rows;
}

function create_penyelenggara($post)
{
    global $conn;

    $nama = $post['nama_penyelenggara'];
    $event = $post['nama_event'];
    $email = $post['email_penyelenggara'];
    $sosmed = $post['sosmed_penyelenggara'];

    $query = "INSERT INTO penyelenggara VALUES(null, '$nama', '$event', '$email', '$sosmed')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_penyelenggara($post)
{
    global $conn;

    $id = $post['id_penyelenggara'];
    $nama = $post['nama_penyelenggara'];
    $event = $post['nama_event'];
    $email = $post['email_penyelenggara'];
    $sosmed = $post['sosmed_penyelenggara'];

    $query = "UPDATE penyelenggara SET nama_penyelenggara = '$nama', nama_event = '$event', email_penyelenggara= '$email', sosmed_penyelenggara = '$sosmed' WHERE id_penyelenggara = $id ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete_penyelenggara($id)
{
    global $conn;

    $query = "DELETE FROM penyelenggara WHERE id_penyelenggara = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
