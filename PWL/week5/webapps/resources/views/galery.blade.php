ini galeri galeri

<form action="galery/submit" method="post">
    @csrf
    <label for="kode">kode</label>
    <input type="number" id="kode" name="kode" required>
    <br>
    <label for="gambar">gambar</label>
    <input type="file" id="gambar" name="gambar" required>
    <br>
    <input type="submit" value="Submit">
</form>"