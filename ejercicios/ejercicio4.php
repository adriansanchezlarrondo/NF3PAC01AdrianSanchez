<!DOCTYPE html>
<html>
<head>
    <title>Formatear Texto</title>
</head>
<body>
    <h1>Formatear Texto</h1>
    <?php
    $texto = $colorTexto = $fontFamily = $tamanoFuente = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $texto = $_POST['texto'];
        $colorTexto = $_POST['colorTexto'];
        $fontFamily = $_POST['fontFamily'];
        $tamanoFuente = $_POST['tamanoFuente'];

        echo "<div style='color: $colorTexto; font-family: $fontFamily; font-size: {$tamanoFuente}px;'>";
        echo nl2br(htmlspecialchars($texto));
        echo "</div>";
    }
    ?>

    <form method="post">
        <label for="texto">Ingrese el texto:</label></br>
        <textarea name="texto" rows="4" cols="50"><?php echo htmlspecialchars($texto); ?></textarea></br>
        
        <label for="colorTexto">Color del texto:</label>
        <input type="color" name="colorTexto" value="<?php echo $colorTexto; ?>"></br>
        
        <label for="fontFamily">Fuente:</label>
        <select name="fontFamily">
            <option value="Arial, sans-serif" <?php if ($fontFamily === 'Arial, sans-serif') echo 'selected'; ?>>Arial</option>
            <option value="Verdana, sans-serif" <?php if ($fontFamily === 'Verdana, sans-serif') echo 'selected'; ?>>Verdana</option>
            <option value="Times New Roman, serif" <?php if ($fontFamily === 'Times New Roman, serif') echo 'selected'; ?>>Times New Roman</option>
        </select></br>
        
        <label for="tamanoFuente">Tamaño del texto:</label>
        <input type="number" name="tamanoFuente" min="8" max="72" step="1" value="<?php echo $tamanoFuente; ?>"></br>
        
        <input type="submit" value="Formatear Texto">
    </form>
</body>
</html>
