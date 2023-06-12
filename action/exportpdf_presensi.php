<?php
include 'koneksi.php';
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
session_start();
$id = $_SESSION['id'];
$query = mysqli_query($koneksi,"SELECT mahasiswa.Nama, matakuliah.NamaMataKuliah, kehadiran_matakuliah.Kehadiran
        FROM mahasiswa
        JOIN kehadiran_matakuliah ON mahasiswa.Id = kehadiran_matakuliah.IdMahasiswa
        JOIN matakuliah on kehadiran_matakuliah.IdMataKuliah = matakuliah.IdMataKuliah
        WHERE mahasiswa.Id  = $id");
$html = '<center><h3>KRS</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama</th>
<th>Mata Kuliah</th>
<th>Kehadiran</th>
</tr>';
$no = 1;

while($data = mysqli_fetch_array($query))
{
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$data["Nama"]."</td>
        <td>".$data["NamaMataKuliah"]."</td>
        <td>".$data["Kehadiran"]."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Export Presensi.pdf');
?>
