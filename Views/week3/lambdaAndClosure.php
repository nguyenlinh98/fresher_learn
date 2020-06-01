<?php
// Use create_function
$hello = create_function('', 'echo "Hello World!";');
$hello();

// Call function
/**
 * @param $messeger
 * lambda
 */
function show($messeger){
    echo $messeger();
}
show(function(){
    return "hello word!";
});

