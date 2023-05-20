<?php
    $names = ['Harry','Ron', 'Hermione'];
    $status = [
        'name' => 'James Potter',
        'status' => 'dead'
    ];
    
    $names[] = 'Neville';
    $status['age'] = 32;
    
    print_r($names);
?>