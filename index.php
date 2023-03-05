<!DOCTYPE html>
<html>
    <head>
        <?php include_once('head.php');?>
    </head>
    <body>
        <header>
            <nav>
                <?php include_once('nav.php');?>
            </nav>
        </header>
        <section>
            <?php include_once('content.php')?>       
        </section>
        <footer>
            <div class="wrapper">
                <ul>
                    <li>
                        <p>&copy;Blaise Porret <?php echo date('Y');?></p>
                    </li>                    
                    <li>
                        <p><?php include('nav.php');?></p>
                    </li>                      
                    <li>
                        <p>&copy;Blaise Porret <?php echo date('Y');?></p>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>