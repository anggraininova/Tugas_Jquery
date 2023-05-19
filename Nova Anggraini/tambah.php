<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form validation</title>
</head>
<body>

<div class="container">
    <form action="proses_tambah.php" id="form" class="form" autocomplete="off">
        <h2>Form Validation Customer</h2>
        <div class="form-control">
            <label for="first_name">First_Name</label>
            <input type="text" id="first_name" placeholder="Enter firstname">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="last_name">Last_Name</label>
            <input type="text" id="last_name" placeholder="Enter lastname">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter email">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="phone">Phone</label>
            <input type="text" id="phone" placeholder="Enter phone">
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="address">Address</label>
            <input type="text" id="address" placeholder="Enter address">
            <small>Error message</small>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

    <script src="app.js"></script>
</body>
</html>
