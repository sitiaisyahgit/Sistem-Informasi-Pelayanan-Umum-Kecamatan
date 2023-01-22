<table id="datatables" class="table table-striped table-bordered">
<head>
    <tr>
        <th>Nomor KTP</th>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Tempat Lahir</th>
        <th>Tanggal lahir</th>
        <th>Agama</th>
        <th>Pekerjaan</th>
        <th>Status</th>
        <th>Alamat</th>
    </tr>
</head>
<body>
    <?php foreach ($pmbList as $pmb):?>
        <tr>
            <td><?php echo $nomor_ktp ?></td>
            <td><?php echo $pmb->nomor_ktp ?></td>
            <td><?php $tgl = date_create($pmb->tanggal_buat);echo date_format($tgl,"D, d M Y"); ?></td>
            <td><?php echo $pmb->nama ?></td>
            <td><?php echo $pmb->nik ?></td>
            <td><?php echo $pmb->tempat_tl ?></td>
            <td><?php $tgl = date_create($pmb->tanggal_lahir);echo date_format($tgl,"D, d M Y"); ?></td>
            <td><?php echo $pmb->agama ?></td>
            <td><?php echo $pmb->pekerjaan ?></td>
            <td><?php echo $pmb->status_perkawinan ?></td>
            <td><?php echo $pmb->alamat ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
</body>
</table>