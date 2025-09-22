<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Newsletter</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>

<body class="p-3">
    <?php require __DIR__ . '/includes/navigation.php'; ?>
    <div class="container">
        <h1>Newsletter</h1>

        <form action="newsletter.php" method="post" class="mb-3">
            <label class="form-label">Username
                <input class="form-control" type="text" name="user" >
            </label>
            <label class="form-label mt-2">Email
                <input class="form-control" type="text" name="email">
            </label>
            <button class="btn btn-primary mt-3" type="submit">Subscribe</button>
        </form>
        
    </div>
</body>

</html>