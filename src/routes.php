       <?php
       $routes = [
       'getCountries',
        'validateNumber',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

