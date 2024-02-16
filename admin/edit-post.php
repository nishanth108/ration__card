<?php
include 'partial/header.php';
?>
<section class="form__section">
    <div class="container form_section-container">
    <h2>Edit Post</h2>
    <form action=""enctype="multipart/form-data">
        <input type="text" placeholder="Title">
        <select>
            <option value="1">Travel</option>
            <option value="1">Art</option>
            <option value="1">Science & Technology</option>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
            <option value="1">Travel</option>
        </select>
        <textarea rows="10" placeholder="Body"></textarea>
        <div class="form__control inline">
            <input type="checkbox" id="is_featured" checked>
            <label for ="is_featured" >Featured</label>
         </div>
         <div class="form__control">
            <label for="thumbnail">change Thumbnail</label>
            <input type="file" id="thumbnail">
         </div>
        <button type="submit"class="btn">update Post</button>
    </form>
    </div>

</section>

<?php
include '../partials/footer.php';
?>