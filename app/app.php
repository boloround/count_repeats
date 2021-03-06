<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;

    Debug::enable();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));
    //Shows the home page with form
    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });
    //Gets input from user, sends it to countRepeats function, sends return values to results Twig page
    $app->get("/results", function() use ($app) {
        $this_RepeatCounter = new RepeatCounter;
        $this_count = $this_RepeatCounter->countRepeats($_GET['word'], $_GET['string']);
        return $app['twig']->render('results.html.twig', array('values' => $this_count));
    });

    return $app;
 ?>
