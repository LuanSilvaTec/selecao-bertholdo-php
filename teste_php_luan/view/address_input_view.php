
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" />
    <title> MEU CEP </title>
</head>
<body>
<div name="externa" style="align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center; padding: inherit">
    <div class="badge bg-primary text-wrap" style="margin: auto;width: 50%; justify-content: center">
        <div style="display:flex;flex-direction: row; flex-wrap: wrap; position: relative; justify-content: center; padding: inherit">
            <div class="header-cep" style="padding: 10px">
                <p style="font-family: 'Arial Black';font-size: 30px">MEU CEP</p>
            </div>
            <div style="padding: 10px">
                <img src="./utils/bertholdo.jpg" style="width: 60px"/>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <form action='./controller/AddressController.php' method="post">
                <div class="d-inline-flex p-2 bd-highlight">
                    <label class="form-label"> Insira o CEP: </label>
                    <input class="form-control" type="text" name="cep" placeholder="CEP">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-secondary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

