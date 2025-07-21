@include('layout.header')

<h3>buat post</h3>

<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" id="" required placeholder="Masukan title Postingan"><br>
        <label for="">content</label>
        <input type="text" name="content" class="content" required placeholder="Masukan isi Postingan"><br>
        <div>
            <label for="">Kategori</label>
            <select name="category" required>
                <option value="">-- Pilih --</option>
                <option value="pengumuman">Pengumuman</option>
                <option value="berita">Berita</option>
            </select>
        </div>
    </div>
    <button type="submit" class="button">Tambah</button>
</form>

@include('layout.footer');
