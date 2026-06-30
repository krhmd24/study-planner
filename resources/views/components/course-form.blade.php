<form action="{{ route('courses.store') }}" method="POST">

    @csrf

    <input
        type="hidden"
        name="semester_id"
        value="{{ $semester->id }}"
    >

    <div class="form-group">

        <label>Kode Mata Kuliah</label>

        <input
            type="text"
            name="code"
            placeholder="Contoh : IF402"
            required
        >

    </div>

    <div class="form-group">

        <label>Nama Mata Kuliah</label>

        <input
            type="text"
            name="name"
            placeholder="Contoh : Pemrograman Web"
            required
        >

    </div>

    <div class="form-group">

        <label>Hari</label>

        <select name="day">

            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
            <option>Sabtu</option>
            <option>Minggu</option>

        </select>

    </div>

    <button
        class="primary-btn"
        type="submit">

        Tambah Mata Kuliah

    </button>

</form>