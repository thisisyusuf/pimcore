<html>
<head>
    <style type="text/css">
        body {
            background: #ccc;
        }

        h1 {
            color: #ed1943;
        }

        .container {
            width: 75%;
            padding: 25px;
            margin: 50px auto;
            background: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Layout</h1>
    <?php $this['slots']->output('_content') ?>
</div>

</body>
</html>