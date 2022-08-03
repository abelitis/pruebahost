<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="guardardatos.php" method="POST">
    <div class="rendered-form">
        <div class="formbuilder-text form-group field-nombre">
            <label for="nombre" class="formbuilder-text-label">
                <div>Nombre Libro</div><span class="formbuilder-required">*</span></label>
            <input type="text" class="form-control" name="nombre" access="false" id="nombre" required="required" aria-required="true">
        </div>
        <div class="formbuilder-text form-group field-pag">
            <label for="pag" class="formbuilder-text-label">
                <div>Paginas</div><span class="formbuilder-required">*</span></label>
            <input type="text" class="form-control" name="paginas" access="false" id="pag" required="required" aria-required="true">
        </div>
        <div class="formbuilder-text form-group field-autor">
            <label for="autor" class="formbuilder-text-label">autor<span class="formbuilder-required">*</span></label>
            <input type="text" class="form-control" name="autor" access="false" id="autor" required="required" aria-required="true">
        </div>
    </div>

    <button type="submit">Insertar</button>
</form>
</body>
</html>