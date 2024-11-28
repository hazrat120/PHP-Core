

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        form{
            background-color: #d7dbdd;
            border-radius: 5px;
            width: 250px;
            padding: 20px 40px;
            display: flex;
            flex-direction: column;
        }
        label{
            font-size: 18px;
            font-weight: 500;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex; flex-direction: column; margin-bottom: 30px;">
        <label for="image">Uploade image</label>
        <input type="file" name="imagefile" id="iamge">
        </div>
        <div>
            <button type="submit" name="submitBtn">Submit</button>
        </div>
    </form>
</body>
</html>