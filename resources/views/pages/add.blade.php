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
<form method="POST" action="addcontact" enctype="multipart/form-data">
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
    <button type="submit">upload</button>
</form>

<h1>contact</h1>
<form method="POST" action="addcontact">
    @csrf
    <input type="text" name="pagetitle" required placeholder="pagetitle">
    <input type="text" name="introduction" required placeholder="introduction">
    <input type="text" name="address" required placeholder="address">
    <input type="tel" name="telephone" required placeholder="telephone">
    <input type="email" name="email" required placeholder="email">
    <button type="submit">upload</button>
</form>

<h1>gallery</h1>
<form method="POST" action="addgallery" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file_path" required>
    <button type="submit">upload</button>
</form>

<h1>gallery info</h1>
<form method="POST" action="addgalinfo">
    @csrf
    <input type="text" name="pagetitle" required >
    <input type="text" name="introduction" required>
    <button type="submit">upload</button>
</form>

<h1>gallery</h1>
<form method="POST" action="addprogram" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" required>
    <input type="text" name="price" required >
    <input type="text" name="programintro" required>
    <input type="text" name="motivation" required >
    <input type="text" name="data" required>
    <input type="file" name="file_path" required>
    <button type="submit">upload</button>
</form>
