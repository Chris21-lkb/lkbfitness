<form method="post" action="add">
    @csrf
    <input type="text" name="content" required>
    <button type="submit">upload</button>
</form>

<form method="POST" action="addlearnmore" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" required placeholder="title">
    <input type="text" name="content" required placeholder="content">
    <input type="file" name="file_path" required>
    <button type="submit">upload</button>
</form>

<form method="POST" action="addservice" enctype="multipart/form-data">
    @csrf
    <input type="text" name="content1" required placeholder="title">
    <input type="text" name="content2" required placeholder="content">
    <input type="file" name="file_path" required>
    <button type="submit">upload</button>
</form>
