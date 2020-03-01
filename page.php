<style>
    ul li{list-style: none;}
</style>
<section id="s1">
<?php
include'conn.php';
$page=$_GET['page'];
$pagesize=$page*5;


    $sql="SELECT * FROM list ORDER BY id LIMIT 0,$pagesize";
    $array=$conne->getRowsArray($sql);
    foreach ($array as $key => $title) {
       $id=$array[$key]['id'];     
          $domain=$array[$key]['domain'];   
          if($domain!=null){
        echo "<ul><li><a>".$domain."</ul></li></a>";                
          }
       echo "<ul><li><a>".$id."</ul></li></a>";      


    }
    $q="SELECT * FROM list";  
 $count=$conne->getRows($q);
 $pagenum=ceil($count/$pagesize); 

         ?>
</section>
<section id="s2">
    <?php   
         
              echo "<button onclick=ajaxfunction($page+1)>Next</button>";   

             ?>
</section>