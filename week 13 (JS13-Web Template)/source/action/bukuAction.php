<?php
include('../lib/Session.php');
$session = new Session();

if ($session->get('is_login') !== true) {
    header('Location: ../login.php');
    exit;
}

include_once('../model/BukuModel.php');
include_once('../lib/Secure.php');

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if ($act == 'load') {
    $buku = new BukuModel();
    $data = $buku->getData();
    $result = [];
    $i = 1;

    while ($row = $data->fetch_assoc()) {
        $result['data'][] = [
            $i,
            $row['buku_kode'],
            $row['buku_judul'],
            $row['buku_pengarang'],
            '<button class="btn btn-sm btn-warning" onclick="editData(' . $row['buku_id'] . ')"><i class="fa fa-edit"></i></button>
             <button class="btn btn-sm btn-danger" onclick="deleteData(' . $row['buku_id'] . ')"><i class="fa fa-trash"></i></button>'
        ];
        $i++;
    }

    echo json_encode($result);
}

if ($act == 'get') {
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? intval($_GET['id']) : 0;
    $buku = new BukuModel();
    $data = $buku->getDataById($id);
    echo json_encode($data);
}

if ($act == 'save') {
    $data = [
        'buku_kode' => antiSqlInjection($_POST['buku_kode']),
        'buku_judul' => antiSqlInjection($_POST['buku_judul']),
        'buku_pengarang' => antiSqlInjection($_POST['buku_pengarang']),
    ];

    $buku = new BukuModel();
    $buku->insertData($data);

    echo json_encode([
        'status' => true,
        'message' => 'Data buku berhasil disimpan.'
    ]);
}

if ($act == 'update') {
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? intval($_GET['id']) : 0;

    $data = [
        'buku_kode' => antiSqlInjection($_POST['buku_kode']),
        'buku_judul' => antiSqlInjection($_POST['buku_judul']),
        'buku_pengarang' => antiSqlInjection($_POST['buku_pengarang']),
    ];

    $buku = new BukuModel();
    $buku->updateData($id, $data);

    echo json_encode([
        'status' => true,
        'message' => 'Data buku berhasil diperbarui.'
    ]);
}

if ($act == 'delete') {
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? intval($_GET['id']) : 0;

    $buku = new BukuModel();
    $buku->deleteData($id);

    echo json_encode([
        'status' => true,
        'message' => 'Data buku berhasil dihapus.'
    ]);
}
