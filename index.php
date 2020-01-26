<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lofi pixel artboard</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .main {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .cell {
            height: 25px;
            width: 25px;
            outline: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $GRID_SIZE = 16;
    $row = array_fill(0, $GRID_SIZE, '');
    $column = array_fill(0, $GRID_SIZE, $row);

    // Build the grid
    echo "<div class='main'>";
    foreach ($column as $myRow) {
        echo "<div class='row'>";
        foreach ($myRow as $cell) {
            echo "<span class='cell'></span>";
        }
        echo '</div>';
    }
    echo "<small style='margin-top: 5px'>make lofi pixel art.</small>";
    echo '</div>';
    ?>

    <script>
        const cells = document.querySelectorAll('.cell');

        // Handle cell click
        const toggleCellFill = cell => {
            cell.style.backgroundColor = (cell.style.backgroundColor === 'white') ?
                'black' :
                'white';
        }

        cells.forEach(cell => {
            cell.style.backgroundColor = 'white';
            cell.addEventListener('click', event => toggleCellFill(event.target));
        });
    </script>
</body>

</html>