<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect("localhost", "root", "", "dialiay");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $Nume = mysqli_real_escape_string($link, $_POST['Nume']);
    $Prenume = mysqli_real_escape_string($link, $_POST['Prenume']);
    $Email = mysqli_real_escape_string($link, $_POST['Email']);
    $Telefon = mysqli_real_escape_string($link, $_POST['Telefon']);
    $Artist = mysqli_real_escape_string($link, $_POST['Artist']);

    $sql = "INSERT INTO Rezervari (Nume, Prenume, Email, Telefon, Artist) 
            VALUES ('$Nume', '$Prenume', '$Email', '$Telefon', '$Artist')";

    if (mysqli_query($link, $sql)) {
        mysqli_close($link);
        header('Location: succes.php');
        exit();
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rezervare Artist</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<form action="" method="POST">
    <h2>Rezervare Artist</h2>
    <label for="Nume">Nume:</label>
    <input type="text" id="Nume" name="Nume" required>

    <label for="Prenume">Prenume:</label>
    <input type="text" id="Prenume" name="Prenume" required>

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" required>

    <label for="Telefon">Telefon:</label>
    <input type="tel" id="Telefon" name="Telefon" required>

    <label for="Artist">Artist dorit:</label>
    <input type="text" id="Artist" name="Artist" required>

    <button type="submit">Trimite Rezervarea</button>
</form>

</body>
</html>
