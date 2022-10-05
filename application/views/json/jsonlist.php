<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST API KAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">TEST API KAI</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kode Stasiun</th>
                <th scope="col">Nama Stasiun</th>
                <th scope="col">Kota</th>
                <th scope="col">Nama Kota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $start = 0;
                foreach ($datalist as $kai) {
                ?>

                    <th scope="row"><?php echo ++$start; ?></th>
                    <td><?php echo $kai->code; ?></td>
                    <td><?php echo $kai->name; ?></td>
                    <td><?php echo $kai->city; ?></td>
                    <td><?php echo $kai->cityname; ?></td>
            </tr>
        <?php  } ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>