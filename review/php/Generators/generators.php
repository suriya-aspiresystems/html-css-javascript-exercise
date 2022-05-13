<?php
function nums() {
    echo "The generator has startedn";
    for ($i = 0; $i < 5; ++$i) {
        yield $i;
        echo "Yielded $in";
    }
    echo "The generator has endedn";
}

foreach (nums() as $v);