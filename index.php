<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Animalito</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="mx-auto text-center bg-rose-400 py-5">
        <?php
            include 'Animal.php';
            include 'Raza.php';
            $razaFluffy= new Raza();
            $razaFluffy->setRaza("Extraterrestre");
            
            $fluffy= new Animal();
            $fluffy->setNombre("Fluffy");
            $fluffy->setRaza($razaFluffy);
            $fluffy->setFechaNacimiento("01/01/2086");
        ?>
        <p class="text-white text-2xl">¡Mi mascota es un alien!</p>
        <h1 class="text-white text-5xl font-bold"><?php echo $fluffy->getNombre()?></h1>
    </div>
    <div class="container mx-auto text-center mt-5">
        <p>Raza: <?php echo $razaFluffy->getRaza()?></p>
        <p>Fecha de Nacimiento: <?php echo $fluffy->getFechaNacimiento()?></p>
    </div>
    <img  class="w-40 mt-5 mx-auto" src="img/fluffy.png" alt="fluffy">
    
</body>
</html>