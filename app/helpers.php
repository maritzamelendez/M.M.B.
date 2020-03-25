  
<?php

function LinkActivo($NombreRuta){
return request()->routeIs($NombreRuta) ? 'active' : '';
}
?>