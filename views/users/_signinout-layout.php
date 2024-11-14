<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $pageTitle ?></title>
        <link rel="stylesheet" href="/assets/css/styles.css">
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/yh9alek/miscellaneous/refs/heads/main/src/LoginSample/imgs/brain-icon.png" type="image/x-png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body class="bg-[#F8F8F8]">
        <section class="mt-[75px]">

            <div class="form w-[900px] mx-auto pt-[67px] pb-[87px] flex justify-center gap-[100px] bg-white rounded-[20px] shadow-[0px_15px_16.83px_0.17px_rgba(0,0,0,0.05)] 990:w-[80%] 870:block">
                    <figure class="w-[300px] h-[357.391px] 990:w-[220px] 990:relative 990:top-[50px] 870:hidden">
                        <img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signup-image.jpg" alt="Ilustracion">
                    </figure>

                    <?= $slot ?>

                    <?php if(!empty($errors)): ?>
                        <?php foreach($errors as $error): ?>
                            <p class="text-[#fb7773] relative top-[-97px] text-[13px] 870:absolute 870:w-[300px] 870:left-[0px] 870:top-[350px] 870:text-[13px]"><?= $error ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </div>

        </section>
    </body>
</html>