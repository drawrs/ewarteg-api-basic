<?php
include './config/koneksi.php';

$sql = "SELECT*FROM makanankhas ORDER BY id_makanan desc";
$query = $conn->query($sql);

$data = [];
while ($makanan = $query->fetch_assoc()) {
	$data[] = ['id_makanan1' => $makanan['id_makanan'],
				'nama1' => $makanan['nama'],
				'detail1' => $makanan['detail'],
				'gambar1' => $makanan['gambar'],
				'harga1' => $makanan['harga'],
				'status1' => $makanan['status']
				];
}
$response = ['makanan' => $data];
//header("Content-Type: text/json)");
echo json_encode($response);