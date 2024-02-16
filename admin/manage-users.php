<?php
include 'partial/header.php';
?>


<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar" class="sidebar__toggle" ><i class="fa-solid fa-chevron-right"></i></button>
        <button id="hide__sidebar" class="sidebar__toggle" ><i class="fa-solid fa-angle-left"></i></button>
        <aside>
           <ul>
                <li style="padding-top:2rem;">
                    <a href="add-post.php"><i class="fa-solid fa-pencil"></i>
                        <h5>Add post</h5>
                    </a>
                </li>
                
                <li>
                    <a href="index.php"><i class="fa-solid fa-clone"></i>
                        <h5>Manage post</h5>
                    </a>
                </li>
                
                <li>
                    <a href="add-user.php"><i class="fa-solid fa-user-plus"></i>
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php" class="active"><i class="fa-solid fa-users"></i>
                        <h5>Manage User</h5>
                    </a>
                </li>
                
                <li>
                    <a href="add-category.php"><i class="fa-solid fa-pen-to-square"></i>
                        <h5>Add Category</h5>
                    </a>
                </li>
                
                <li>
                    <a href="manage-categories.php" ><i class="fa-solid fa-list"></i>
                        <h5>Manage Category</h5>
                    </a>
                </li>
            </ul>        
        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ernest Achiver</td>
                        <td>achiver</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Daniel vinoy</td>
                        <td>daneik</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>jane</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>No</td>
                    </tr>
                    

                 
                </tbody>
            </table>
        </main>
    </div>
</section>
<?php
include '../partials/footer.php';
?>
