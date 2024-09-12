<?php if($theme == "noir"): ?>
    <script>
        let menu_1 = document.getElementById("menu_1");// les titres MOkili MI
        menu_1.setAttribute('fill', '#FBFCFC'); 
        let menu_2 = document.getElementById("menu_2");// menu 1
        menu_2.setAttribute('stroke', '#FBFCFC')// menu 2
        
        document.querySelectorAll(".fermer").forEach(element => {
            element.setAttribute('fill', '#ECF0F1');
        });

    </script>
<?php elseif($theme == "rose"): ?>  
    <script>
        let menu_1 = document.getElementById("menu_1");// les titres MOkili MI
        menu_1.setAttribute('fill', '#FBFCFC'); 
        let menu_2 = document.getElementById("menu_2");// menu 1
        menu_2.setAttribute('stroke', '#FBFCFC')// menu 2

        document.querySelectorAll(".fermer").forEach(element => {
            element.setAttribute('fill', '#ECF0F1');
        });
    </script>
<?php else: ?> 
    <script>
        document.querySelectorAll(".fermer").forEach(element => {
            element.setAttribute('fill', '#34495E');
        });
    </script>   
<?php endif ; ?> 