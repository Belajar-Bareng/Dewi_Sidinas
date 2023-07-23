<?php 

if(!isset($_GET['id'])) {
    header('location: /');
    exit;
}

$id = $_GET['id'];

include 'koneksi.php';


//mengambil data
$query = "SELECT * FROM surat_keluar WHERE id_keluar = '$id'";

$row = [];
try {
    $row = $koneksi->query($query)->fetch_assoc();
} catch (\Throwable $th) {
    var_dump($th->getMessage());
    exit;
}

?>

<html>
<head>
<title>Cetak Surat Keluar</title>
</head>

<body>
<table align="center" border="0" cellpadding="1" style="width: 700px;"><tbody>
<tr>     <td colspan="3"><div align="center">
<span style="font-family: Verdana; font-size: x-small;"><b><?= $row['nm_instansi'] ?></b></span>
<hr />
</div>
</td>   </tr>
<tr>     <td colspan="2"><table border="0" cellpadding="1" style="width: 400px;"><tbody>
<tr>         <td width="93"><span style="font-size: x-small;">No</span></td>         <td width="8"><span style="font-size: x-small;">:</span></td>         <td width="200"><span style="font-size: x-small;"><?= $row['id_keluar'] ?></span></td>       </tr>
<tr>         <td><span style="font-size: x-small;">Lampiran</span></td>         <td><span style="font-size: x-small;">:</span></td>         <td><span style="font-size: x-small;">-</span></td>       </tr>
<tr>         <td><span style="font-size: x-small;">Perihal</span></td>         <td><span style="font-size: x-small;">:</span></td>         <td><span style="font-size: x-small;">Slip Gaji</span></td>       </tr>
</tbody></table>
</td>     <td valign="top"><div align="right">
<span style="font-size: x-small;">Banjarmasin, <?= $row['tanggal'] ?></span></div>
</td>   </tr>
<tr>     <td width="302"></td>     <td width="343"></td>     <td width="339"></td>   </tr>
<tr>     <td><table border="0" style="width: 239px;"><tbody>
<tr>         <td width="74"><span style="font-size: x-small;">kepada</span></td>         <td width="11">
</td>         <td width="140"></td>       </tr>
<tr>         <td><span style="font-size: x-small;"><?= $row['nm_pegawai'] ?></span></td>         <td></td>         <td>
</td>       </tr>
<tr>         <td><span style="font-size: x-small;">di</span></td>         <td></td>         <td>
</td>       </tr>
<tr>         <td><span style="font-size: x-small;">tempat</span></td>         <td></td>         <td>
</td>       </tr>
</tbody></table>
</td>     <td></td>     <td></td>   </tr>
<tr>     <td></td>     <td></td>     <td></td>   </tr>
<tr>     <td colspan="3" height="270" valign="top"><div align="justify">
<pre><span style="font-size: x-small;">Dengan hormat,
Berikut adalah status gaji:</span></pre>
<table border="0" style="width: 352px;"><tbody>
<tr>           <td width="80"><span style="font-size: x-small;">tanggal</span></td>           <td width="10"><span style="font-size: x-small;">:</span></td>           <td width="248"><span style="font-size: x-small;"><?= $row['tanggal'] ?></span></td>         </tr>
<tr>           <td><span style="font-size: x-small;">status</span></td>           <td><span style="font-size: x-small;">:</span></td>           <td><span style="font-size: x-small;"><?= $row['status'] ?></span></td>         </tr>
</tbody></table>
<div align="justify">
<span style="font-size: x-small;">

Demikian surat ini kami sampaikan. Sekian dan terima kasih.</span> </div>
</div>
</td>   </tr>
<tr>     <td></td>     <td valign="top"><div align="center">
<span style="font-size: x-small;">Hormat Kami, </span></div>
<div align="center">

</div>
<div align="center">
<span style="font-size: x-small;"><?= $row['nm_admin'] ?></span></div>
</td>   </tr>
</tbody></table>
<script defer>
    window.print();
</script>
</body>
</html>