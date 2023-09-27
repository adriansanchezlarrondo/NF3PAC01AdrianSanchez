<!DOCTYPE html>
<html>
<head>
    <title>Formatear Texto</title>
</head>
<body>
    <h1>Formatear Texto</h1>
<?php
    $texto = $colorTexto = $fontFamily = $tamanoFuente = '';
    $guardarInfo = 'no';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $texto = $_POST['texto'];
        $colorTexto = $_POST['colorTexto'];
        $fontFamily = $_POST['fontFamily'];
        $tamanoFuente = $_POST['tamanoFuente'];

        echo "<div style='color: $colorTexto; font-family: $fontFamily; font-size: {$tamanoFuente}px;'>";
        echo nl2br(htmlspecialchars($texto));
        echo "</div>";

        if (isset($_POST['guardarInfo'])) {
            $guardarInfo = $_POST['guardarInfo'];
        }

        if ($guardarInfo === 'si') {
            setcookie('saved_text', $texto, time() + 30 * 24 * 60 * 60, '/');
            setcookie('saved_color', $colorTexto, time() + 30 * 24 * 60 * 60, '/');
            setcookie('saved_font', $fontFamily, time() + 30 * 24 * 60 * 60, '/');
            setcookie('saved_size', $tamanoFuente, time() + 30 * 24 * 60 * 60, '/');
        }
    }
?>

    <form method="post">
        <label for="texto">Ingrese el texto:</label></br>
        <textarea id="texto" name="texto" rows="4" cols="50"><?php echo htmlspecialchars($texto); ?></textarea></br>
        
        <label for="colorTexto">Color del texto:</label>
        <input type="color" id="colorTexto" name="colorTexto" value="<?php echo $colorTexto; ?>"></br>
        
        <label for="fontFamily">Fuente:</label>
        <select id="fontFamily" name="fontFamily">
            <option value="Arial, sans-serif" <?php if ($fontFamily === 'Arial, sans-serif') echo 'selected'; ?>>Arial</option>
            <option value="Verdana, sans-serif" <?php if ($fontFamily === 'Verdana, sans-serif') echo 'selected'; ?>>Verdana</option>
            <option value="Times New Roman, serif" <?php if ($fontFamily === 'Times New Roman, serif') echo 'selected'; ?>>Times New Roman</option>
        </select></br>
        
        <label for="tamanoFuente">Tamaño del texto:</label>
        <input type="number" id="tamanoFuente" name="tamanoFuente" min="8" max="72" step="1" value="<?php echo $tamanoFuente; ?>"></br>
        
	<label for="guardarInfo">¿Guardar esta información para la próxima vez?</label>
        <input type="radio" name="guardarInfo" value="si" <?php if ($guardarInfo === 'si') echo 'checked'; ?>> Sí
        <input type="radio" name="guardarInfo" value="no" <?php if ($guardarInfo === 'no') echo 'checked'; ?>> No</br>
        
        <input type="submit" value="Formatear Texto">
    </form>
</body>
</html>