<?php if($theme == "blanc"): ?>
   <link rel="stylesheet" href={{ asset("css/themes/themeBlanc.css") }}>
<?php elseif($theme == "noir"): ?>
   <link rel="stylesheet" href={{ asset("css/themes/themeNoir.css") }}>
<?php elseif($theme == "rose"): ?>  
   <link rel="stylesheet" href={{ asset("css/themes/themeRose.css") }}>
<?php else: ?>  
   <link rel="stylesheet" href={{ asset("css/themes/themeBlanc.css") }}>
<?php endif ; ?> 