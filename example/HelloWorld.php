<?php
namespace example;

/**
 * @Route("/")
 */
class HelloWorld {

    public function GET() : void
    {
        echo "<h1>Hello World!</h1>";
    }

}

?>