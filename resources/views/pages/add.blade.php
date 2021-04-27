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
<h1>about</h1>
<form method="POST" action="addabout" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titlepage" required placeholder="title">
    <input type="text" name="introductionpage" required placeholder="introduction">
    <input type="file" name="file_path" required>
    <input type="text" name="name" required placeholder="name">
    <input type="text" name="content" required placeholder="content">
    <button type="submit">upload</button>
</form>
<h1>success key</h1>
<form method="POST" action="successAdd" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titleone" required placeholder="titleone">
    <input type="text" name="contentone" required placeholder="contentone">
    <input type="text" name="titletwo" required placeholder="titletwo">
    <input type="text" name="contenttwo" required placeholder="contenttwo">
    <input type="text" name="titlethree" required placeholder="titlethree">
    <input type="text" name="contentthree" required placeholder="contentthree">
    <input type="text" name="titlefour" required placeholder="titlefour">
    <input type="text" name="contentfour" required placeholder="contentfour">
    <button type="submit">upload</button>
</form>
