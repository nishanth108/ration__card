<?php
include 'partial/header.php';
?>

<section class="form__section">
    <div class="container form_section-container">
    <h2>Add User</h2>
    <div class="alert_message error">
        <p>This is the error message</p>
    </div>
    <form action=""enctype="multipart/form-data">
        <input type="text" placeholder="First name">
        <input type="text" placeholder="Last name">
        <input type="text" placeholder="Username">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Create Password">
        <input type="text" placeholder="Confirm Password">
        <select>
            <option value="0">Author</option>
            <option value="1">Admin</option>
        </select>
        <div class="form_control">
            <label form="avatar">User Avatar</label>
            <input type="file" id="avatar">
        </div>
        <button type="submit"class="btn">Add User</button>
    </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>