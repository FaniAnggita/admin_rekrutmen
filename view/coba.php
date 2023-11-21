<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable Table</title>

    <style>
        td {
            cursor: pointer;
            padding: 8px;
            border: 1px solid #ccc;
        }

        td input {
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <table id="editableTable">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td onclick="makeEditable(this)">Editable Cell 1</td>
                <td onclick="makeEditable(this)">Editable Cell 2</td>
            </tr>
        </tbody>
    </table>

    <script>
        function makeEditable(cell) {
            var content = cell.innerHTML;
            cell.innerHTML = '<input type="text" value="' + content + '" />';
            var input = cell.querySelector('input');
            input.focus();

            input.addEventListener('blur', function () {
                cell.innerHTML = input.value;
            });

            input.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    cell.innerHTML = input.value;
                }
            });
        }
    </script>

</body>

</html>