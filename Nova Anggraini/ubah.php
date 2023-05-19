<?php 
include_once("koneksi.php");
$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id'");

while($customer = mysqli_fetch_array($query)){
    $firstname = $customer['first_name'];
    $lastname = $customer['last_name'];
    $email = $customer['email'];
    $phone = $customer['phone'];
    $address = $customer['address'];
}
?>
<form action="proses_ubah.php?id=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name ="first_name" value="<?php echo $firstname ?>"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name ="last_name" value="<?php echo $lastname ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name ="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name ="phone" value="<?php echo $phone ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name ="address" value="<?php echo $address ?>"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" name ="submit" value="Ubah"></td>
        </tr>
    </table>
</form>