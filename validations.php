<?php
    function validateServer() {
        if (isset($_GET["server"])) {
            $output = $_GET["server"];
        } else {
            $output = 's1';
        }
        return $output;
    }

    function validateLoc() {
        if (isset($_GET["loc"])) {
            $output = $_GET["loc"];
        } else {
            $output = 'es';
        }
        return $output;
    }

    function validateId() {
        if (isset($_GET["id"])) {
            $output = $_GET["id"];
        } else {
            $output = '1';
        }
        return $output;
    }

    /**
    * correct categories are:
    * ID	Name
    * 1		Player
    * 2		Alliance
     */
    function validateCategory() {
        if (isset($_GET["category"])) {
            $output = $_GET["category"];
        } else {
            $output = '1';
        }
        return $output;
    }

    /**
    * correct types are:
    * ID	Name
    * 0	Total
    * 1	Economy
    * 2	Research
    * 3	Military
    * 5	Military Built
    * 6	Military Destroyed
    * 4	Military Lost
    * 7	Honor
     */
    function validateType() {
        if (isset($_GET["type"])) {
            $output = $_GET["type"];
        } else {
            $output = '0';
        }
        return $output;
    }
?>