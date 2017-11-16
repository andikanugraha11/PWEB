<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
<body class="form-background">
    <h1 class="form-header-text">Masukan Data Baru</h1>
    <form name="addData" action="inputData.php" class="form-text" onsubmit="return validasi()" method="post">
            <label>Nama : </label><br/>
            <input class="form-input" name="nama" placeholder="Masukan nama"/><br/>
            <br/>
            <label>Email : </label><br/>
            <input class="form-input" type="email" name="email" placeholder="Masukan Email"/><br/>
            <br/>
            <label>Tanggal Lahir : </label><br/>
            <select class="select-tgl" name="tanggal">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            -
            <select class="select-bulan" name="bulan">
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">July</option>
                <option value="8">Agustus</option>
                <option value="9">Septrmber</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            -
            <select class="select-tahun" name="tahun">
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
            </select>
            <br/><br/>
         
            <label>Jenis Kelamin : </label><br/>
            <input type="radio" value="pria" name="jk" checked/> <label>Pria</label><br/>
            <input type="radio" value="wanita" name="jk"/> <label>Wanita</label><br/><br/>
            <label>Teknologi yang anda gunakan : </label><br/>
            <input type="checkbox" name="tek[]" value="google"><label>Google Cloud</label><br/>
            <input type="checkbox" name="tek[]" value="microsoft"><label>Microsoft Azure</label><br/>
            <input type="checkbox" name="tek[]" value="aws"><label>Amazone Web Service</label><br/>
            <input type="checkbox" name="tek[]"value="ibm"><label>IBM Bluemix</label>
            <br/><br/>
            <label>Pengalaman pengguna: </label><br/></br>
            <textarea name="pengalaman" cols="54" rows="8" placeholder="Ceritakan tentang pengalaman anda"></textarea>
            <br/><br/>
            <button class="button" type="submit">Masukan</button>
            <button class="button" type="reset">Kosongkan</button>
    </form>

</body>
</html>
<script src="assets/js/validation.js"></script>