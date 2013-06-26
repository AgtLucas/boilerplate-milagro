<?php include "include/head.php"; ?>

        <style>
            body {
                color: #767676;
                text-shadow: 1px 1px white;
                background: #f8f8fa;
            }
            #top,
            #main-container article,
            #base-footer {
                background: #e3e3e3;
                border-radius: 5px;
                box-shadow: 1px 1px 3px rgba(0,0,0,.4);
                border-top: 1px solid transparent;
            }
            #top *,
            #main-container article *,
            #base-footer * {
                margin: 0;
            }
            #main-container article {
                padding: 30px 15px; 
            }
            #top {
                height: 100px;
                background: #e3e3e3;
                margin-bottom: 30px;
            }
        </style>

        <!-- Custom page css -->
        <link rel="stylesheet" href="">

        <!-- title -->
        <title>Boilerplate Milagro</title>

    </head>

    <body class="home debug">
        <!-- wrap --> 
        <div id="wrap">
            
            <!-- header -->
            <?php include "include/header.php"; ?>

            <!-- content -->
            <section id="main-container">

                <article class="wrapper-960">   
                    <header>
                        <h1>Sticky footer</h1>
                        <p><a href="http://www.cssstickyfooter.com/br/">http://www.cssstickyfooter.com/br/</a></p>
                    </header>
                    <footer>
                        <h3>Debug mediaqueris</h3>
                        <p><a href="http://johanbrook.com/design/css/debugging-css-media-queries/">http://johanbrook.com/design/css/debugging-css-media-queries/</a></p>
                    </footer>
                </article>

            </section>

        </div>
        <!-- end wrap --> 

        <!-- footer -->
        <?php include "include/footer.php"; ?>

        <!-- Custom page js -->
        <script href=""></script>

    </body>
</html>
