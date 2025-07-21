@include('layout.header')

<h3>buat post</h3>

<form action="{{ route('post.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" id="" value="{{ old('title', $post->title) }}"required><br>
        <label for="">content</label>
        <input type="text" name="content" value="{{ old('content', $post->content) }}"required><br>
        <div>
            <label for="">Kategori</label>
            <select name="category" required>
                <option value="">-- Pilih --</option>
                <option value="pengumuman" {{ old('category', $post->category) == 'pengumuman' ? 'selected' : '' }}>
                    Pengumuman</option>
                <option value="berita" {{ old('category', $post->category) == 'berita' ? 'selected' : '' }}>Berita
                </option>
            </select>
        </div>
    </div>
    <button type="submit" class="button">Update</button>
</form>
@include('layout.footer');
