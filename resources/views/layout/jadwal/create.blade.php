<table>
    <h1>FROM TAMBAH PASIEN</h1>
    <form action="/create" method="POST">
        @csrf
        <tr>
            <td>Id Pasien</td>
            <td>:</td>
            <td><input type="integer" name="id_pasien" class="from-control" required /><br /></td>
        </tr>

        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td><input type="text" name = "nama_pasien" id= "" class= "from-control" required /><br />
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl_lahir" required /><br /></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name='jenis_kelamin' value='L' />Pria
                <input type="radio" name='jenis_kelamin' value='P' />Perempuan
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea cols="22" rows="3" type ="text" name="alamat" required></textarea>
            </td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <button class="btn btn-info" style="width = 100%" type="submit">Tambah</button>
                <a href="/kehadiran" class="btn btn-info" style="width = 100%">Kembali</a>
                {{-- <input type="submit" name="submit" value="Simpan" /> --}}
                {{-- <input type="reset" name="reset" value="Batal" /> --}}
            </td>
        </tr>
        <link href="{{ asset('table.css') }}" rel="stylesheet">
        <link href="{{ asset('heading.css') }}" rel="stylesheet">
</table>
