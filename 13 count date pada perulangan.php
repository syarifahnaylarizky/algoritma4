<?php
$bulan = array('1'=>'Januari', 
			'Februari', 
			'Maret' , 
			'April' , 
			'Mei', 
			'Juni', 
			'Juli', 
			'Agustus', 
			'September', 
			'Oktober', 
			'November', 
			'Desember'
		);

// Informai yang diperoleh dari database
$tahapan = array(
array('tahap' => 'Perencanaan',	'tgl' => '2015-01-31'),
array('tahap' => 'Analisis',	'tgl' => '2015-02-28'),
array('tahap' => 'Perancangan',	'tgl' => '2015-03-31'),
array('tahap' => 'Penerapan',	'tgl' => '2015-04-30'),
array('tahap' => 'Evaluasi',	'tgl' => '2015-05-31'),
array('tahap' => 'Penggunaan',	'tgl' => '2015-06-30')
			);
echo '<table>
		<tr>
			<th rowspan="2">Bulan</th>
			<th colspan="2">Deadline</th>
		</tr>
		<tr>
			<th>Tahapan</th>
			<th>Tanggal</th>
		</tr>
	
		';

$jml_bln = 
for ($i = 1; $i <= count($bulan); $i++)
{	
	echo '<tr>
			<td> ' . strtoupper($bulan[$i]) . ' </td>';
		
		$data_tahapan = false;
		foreach ($tahapan as $tahap)
		{
			$bln_batas = date("m",strtotime($tahap['tgl']));
			if ($bln_batas == $i) {
echo '<td>'.$tahap['tahap'].'</td>
	<td>'.$tahap['tgl'].'</td>';
$data_tahapan = true;
			}
			
		}
		if (!$data_tahapan)
echo '<td>-</td>
	<td>-</td>';
		
	echo '</tr>';
}
echo '</table>';
print_r("<p><strong>by :syarifah nayla rizky");
?>
