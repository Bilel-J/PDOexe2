<?php

function theSectionSelectAllNav(PDO $db){
    try{
        $sth = $db -> query
            ("SELECT idthesection,thesectiontitle 
              FROM thesection
              ORDER BY thesectiontitle ASC");
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    }catch (Exception $e){
        return [];
    }
    return $result;
}
<<<<<<< HEAD
=======

var_dump (theSectionSelectAllNav($db));

>>>>>>> 783d5868d9f5cce3d86b32d2b7f99fd166d3cea8
