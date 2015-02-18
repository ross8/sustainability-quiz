                        $id = rand(1,9);
                        $strSQL = "SELECT * FROM items WHERE id = $id";
                        $rs = mysql_query($strSQL);
                        $q = mysql_fetch_array($rs);
                        echo $q['question'];