<!DOCTYPE html>
<html>
<style>
    div.imggallery{
        border: groove;
        background-color: #7a8eb9;
    }
    div.desc{
        border: groove;
        background-color: #7a8eb9;
    }
    img.gall{
        width: 700px;

    }
    div.upp{
        border: groove;
        background-color: #7a8eb9;
    }
</style><body>
<div class="upp">
<form action="upload" method="post" enctype="multipart/form-data">
    <br>Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
<br><br></form></div>
<form><h2>Image-Gallery</h2>
    <div class="desc"><p> Our image-gallery, consisting of partypictures, pictures of projects and of artists.<br>
        Got some nice pics to add? Feel free to do so...</p>
<div class="imggallery">
<?php
$dirname = "imgs";
$images = glob( $dirname."/*.png");

foreach($images as $image) {
    echo "Picture:<br>";
    echo '<img class="gall" src="/viewrenderer_final/'.$image.'" /><br />';
}?>
</div>
    </form>
</body>
</html>



