<?php

 require 'databaseconnect.php';
  
    
          $query="SELECT * FROM unisearch WHERE unisearch_name LIKE '".$_GET[search]."'%";
            $data=$DBcon->query($query);
            
            while ($result=$data->fetch_assoc()){
                echo $result[unisearch_name];
                
                
            }

       
           