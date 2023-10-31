<?php
session_start();

// Define user roles (you should load these from a database in a real application)
$roles = ['admin', 'manager', 'user'];

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
    echo "Welcome, Admin! Role management options go here.";

    // Role management options (create, edit, delete)
    echo "<h2>Role Management</h2>";
    echo "<form action='role_management.php' method='post'>";

    // Option to create a new role
    echo "Create Role: <input type='text' name='new_role' required>";
    echo "<input type='submit' name='create_role' value='Create'>";

    // Option to edit an existing role
    echo "<h3>Edit Roles</h3>";
    echo "Select a role to edit: <select name='edit_role'>";
    foreach ($roles as $role) {
        echo "<option value='$role'>$role</option>";
    }
    echo "</select>";
    echo "New Role Name: <input type='text' name='edited_role_name' required>";
    echo "<input type='submit' name='edit_role_submit' value='Edit'>";

    // Option to delete an existing role
    echo "<h3>Delete Roles</h3>";
    echo "Select a role to delete: <select name='delete_role'>";
    foreach ($roles as $role) {
        echo "<option value='$role'>$role</option>";
    }
    echo "</select>";
    echo "<input type='submit' name='delete_role_submit' value='Delete'>";

    echo "</form>";

    // Handle form submissions to create, edit, or delete roles
    if (isset($_POST['create_role'])) {
        $newRole = $_POST['new_role'];
        if (!in_array($newRole, $roles)) {
            $roles[] = $newRole;
            echo "Role '$newRole' has been created.";
        } else {
            echo "Role '$newRole' already exists.";
        }
    }

    if (isset($_POST['edit_role_submit'])) {
        $selectedRole = $_POST['edit_role'];
        $editedRoleName = $_POST['edited_role_name'];
        if (in_array($selectedRole, $roles)) {
            $key = array_search($selectedRole, $roles);
            $roles[$key] = $editedRoleName;
            echo "Role '$selectedRole' has been edited to '$editedRoleName'.";
        } else {
            echo "Role '$selectedRole' does not exist.";
        }
    }

    if (isset($_POST['delete_role_submit'])) {
        $selectedRole = $_POST['delete_role'];
        if (($key = array_search($selectedRole, $roles)) !== false) {
            unset($roles[$key]);
            $roles = array_values($roles); // Re-index the array
            echo "Role '$selectedRole' has been deleted.";
        } else {
            echo "Role '$selectedRole' does not exist.";
        }
    }
} else {
    echo "You are not authorized to access this page.";
}
?>
