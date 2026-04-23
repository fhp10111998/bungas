


 <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include ('partial.sidebar');
       <!--  Main wrapper -->
    <div class="body-wrapper">
     @include ('partial.header');
<div class="container-fluid">
    <h1>Buat Account Baaru</h1>
    <h3>Sign Up Form</h3>
    <form action="/hasil" method="post">
        @csrf
        <label for="">First Name</label> <br>
        <input type="text" name="first" id=""> <br>
        <label for="">Last Name</label><br>
        <input type="text" name="last" id=""><br><br>
        <label for="">Gender</label><br>
        <input type="radio" name="jeniskelamin" id="" value="Male"> Male
        <input type="radio" name="jeniskelamin" id="" value="Female"> Female
        <input type="radio" name="jeniskelamin" id="" value="Other"> Other<br><br>
        <label for="">Negara</label><br>
        <select name="negara" id="">
            <option value="">Indonesia</option>
            <option value="">Malaysia</option>
            <option value="">Singapore</option>
        </select><br><br>
        <label for="">Languange Spoken</label><br>
        <input type="checkbox" name="bahasa[]" id="" value="indonesia"> Bahasa indonesia
        <input type="checkbox" name="bahasa[]" id="" value="english"> English
        <input type="checkbox" name="bahasa[]" id="" value="other"> Other<br><br>
        <label for="">Bio :</label><br>
        <textarea name="bio" id=""></textarea><br>
        <input type="submit" name="" id="" value="Proses">
    </form>
    <a href="/">Kembali</a>
  </div>
  </div>
@include ('partial.footer');












