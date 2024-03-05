<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tr class="yel">
                <td width="45%">校園映像資料圖片</td>
                <td width="7%">顯示</td>
                <td width="7%">刪除</td>
                <td></td>
            </tr>
            <?php
            $total = $DB->count();
            $div = 3;
            $pages = ceil($total / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            $rows = $DB->all(" limit $start,$div");
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td class="cent"><img src="./img/<?= $row['img']; ?>" style="width: 150px;height: 103px;"></td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                    <td>
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <input type="button" value="更新圖片" onclick="op('#cover','#cvr','./model/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')">
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if ($now > 1) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'><</a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $fontsize = ($now == $i) ? '24px' : '16px';
                echo "<a href='?do=$do&p=$i'>$i</a>";
            }
            if ($now < $pages) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'>></a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">

            <tr>
                <input type="hidden" name="table" value="<?= $do; ?>">
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動畫圖片圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
            </tr>

        </table>
    </form>
</div>