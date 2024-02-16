<?php
include 'partial/header.php';
?>

<section class="form__section">
    <div class="container form_section-container">
    <h2>Add User</h2>
     <form action=""enctype="multipart/form-data">
        <input type="text" placeholder="First name">
        <input type="text" placeholder="Last name">
         <select>
            <option value="0">Author</option>
            <option value="1">Admin</option>
        </select>
        <button type="submit"class="btn">Update User</button>
    </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>