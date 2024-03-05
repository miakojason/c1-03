<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
                <tr class="yel">
                    <td width="45%">最新資料內容</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td><textarea style="width:90%" type="text" name="text[]"><?= $row['text']; ?></textarea></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        <table style="margin-top:40px; width:70%;">
                <tr>
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增最新資料內容"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
        </table>
    </form>
</div>