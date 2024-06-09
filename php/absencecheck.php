<?php

function absencecheck ($value){
    if ($value == 0){
        echo "غائب";
    }else{
        echo "حاضر";
    }
}