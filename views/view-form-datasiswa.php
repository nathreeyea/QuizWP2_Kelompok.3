<html>

<head>
     <title>Form Input Data Siswa</title>
</head>

<body>
     <center>
         <form action="<?= base_url('Data_Siswa/cetak'); ?>" method="post">
            <table>
                 <tr>
                    <th colspan="3">
                         Form Input Data Siswa
                     </th>
                 </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="Nomor Induk" id="nmr" placeholder="Required">
                    </td>
                 </tr>
                 <?= form_error('nmr'); ?>
                 <tr>
                    <th>Nama Lengkap</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Nama Lengkap" id="nma" placeholder="Required">
                    </td>
                </tr>
                <?= form_error('nma'); ?>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <select name="Kelas" id="kls">
                            <option value="">Pilih Kelas</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        </td>
                    </tr>
                    <?= form_error('kls'); ?>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td> 
                    <td>
                        <input type="text" name="Tanggal Lahir" id="tg" placeholder="Required">
                        </td>
                    </tr>
                    <?= form_error('tg'); ?>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td> 
                    <td>
                        <input type="text" name="Tempat Lahir" id="tmpt" placeholder="Required">
                        </td>
                    </tr>
                    <?= form_error('tmpt'); ?>
                <tr>
                    <th>Alamat</th>
                    <td>:</td> 
                    <td>
                        <input type="text_area" name="Alamat Rumah" id="almt" placeholder="Required">
                        </td>
                    </tr>
                    <?= form_error('almt'); ?>
                <tr>
                    <th>Jenis Kelamin :</th>
                    <td>:</td> 
                    <td>
                        <input type="radio" name="jeniskel" value="Laki-laki"> Laki-laki
                        <input type="radio" name="jeniskel" value="Perempuan"> Perempuan</h4>
                         </td>
                    </tr>
                    <?= form_error('jeniskel'); ?>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="Agama" id="agm">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
         </form>
    </center>
</body>

</html>