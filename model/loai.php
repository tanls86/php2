<?php

class loai extends database
{
    public function loai_insert($ten_loai)
    {
        $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
        parent::pdo_execute($sql, $ten_loai);
    }
    function loai_update($ma_loai, $ten_loai)
    {
        $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
       parent::pdo_execute($sql, $ten_loai, $ma_loai);
    }

   public function loai_delete($ma_loai)
    {
        $sql = "DELETE FROM loai WHERE ma_loai=?";
        if (is_array($ma_loai)) {
            foreach ($ma_loai as $ma) {
                parent::   pdo_execute($sql, $ma);
            }
        } else {
            parent:: pdo_execute($sql, $ma_loai);
        }
    }
   public function loai_select_all()
    {
        $sql = "SELECT * FROM loai ORDER BY ma_loai DESC ";
        return parent::pdo_query($sql);
    }

   public function loai_select_by_id($ma_loai)
    {
        $sql = "SELECT * FROM loai WHERE ma_loai=?";
        return   parent::pdo_query_one($sql, $ma_loai);
    }
   public function loai_exist($ma_loai)
    {
        $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
        return   parent::pdo_query_value($sql, $ma_loai) > 0;
    }
}
