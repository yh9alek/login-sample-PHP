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
    <body class="bg-gray-600">
        <section class="flex justify-center mt-[75px]">

            <div class="pt-[67px] pb-[87px] bg-white rounded-[20px] shadow-[0px_15px_16.83px_0.17px_rgba(0,0,0,0.05)]">
                <div class="cont w-[900px] h-[447.141px] flex justify-between items-center px-[100px] 990:w-[800px] 870:justify-center 870:px-[0px]">
                    <figure class="w-[300px] h-[357.391px] 990:w-[220px] 870:hidden">
                        <img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signup-image.jpg" alt="Ilustracion">
                    </figure>

                    <?= $slot ?>

                </div>
            </div>

        </section>
    </body>
</html>