@include('layout.header')
<h3>
    post</h3>
<a href="{{ route('post.create') }}"class="button">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Content</th>
            <th>Activities</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allpost as $key => $st)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ Str::limit($st->title, 15)}}</td>
                <td> {{ Str::limit($st->content, 100) }}<!--Ini fungsinya untuk memotong isi konten berita yang panjang menjadi maksimal 100 karakter saja.-->
                    @if(strlen($st->content) > 100)<!--Cuplikan isi berita, hanya 100 karakter pertama, kalau lebih dari 100, akan muncul link "Selengkapnya".-->
                        <a href="{{ route('post.show', $st->id) }}">Selengkapnya</a>
                    @endif
                </td>
                <td>{{ $st->category }}</td>
                <td>
                    <form action="{{ Route('post.destroy', $st->id) }}" method="POST">
                        <a href="{{ Route('post.show', $st->id) }}" class="button">Detail</a>
                        <a href="{{ Route('post.edit', $st->id) }}" class="button">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer');
</body>

</html>
