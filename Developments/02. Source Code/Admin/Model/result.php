<?php
    $result = $this->db->select($query);
    $data   = array();
    if ($result)
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
?>
