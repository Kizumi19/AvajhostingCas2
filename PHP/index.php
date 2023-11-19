<!DOCTYPE html>
<html lang="es">

<?php
include(__DIR__ . '/connect.php');

$sql = "SELECT * FROM doctors";
$query = mysqli_query($conn, $sql);

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <!-- <script src="/path/to/cdn/jquery.slim.min.js"></script> -->
    <!-- Load Validation JS -->
    <!-- <script src="/path/to/bs4-form-validation.min.js"></script> -->
    <title>Panel Informatiu </title>
</head>

<body>
    <div>
        <form method="POST" action="createDoctor.php" >
            <h1>Formulari</h1>
            <input type="text" name="Nom" placeholder="Nom">
            <input type="text" name="Cognom" placeholder="Cognom">
            <input type="text" name="id_especialitat" placeholder="Especialitat">
            <input type="text" name="id_localitzacio" placeholder="Localització">

            <input id="submitBtn" type="submit" value="Send "></input>
        </form>
    </div>

    <div>
        <table>
            <thead>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Especialització</th>
                <th>Localització</th>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['surname'] ?> </th>
                    <th> <?= $row['specialty_id'] ?> </th>
                    <th> <?= $row['location_id'] ?> </th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<!-- <script>
document.getElementById("submitBtn").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "createDoctor.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // Aquí capturas los datos del formulario para enviarlos
    var formData = new FormData(document.querySelector("form"));
    
    xhr.send(new URLSearchParams(formData).toString());
    
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Redirigir a index.php si deseas
            window.location.href = "index.php";
        }
    };
});
</script> -->
