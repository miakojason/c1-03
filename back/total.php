<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/edit_info.php">
        <table width="100%">

                <tr class="yel">
                    <td width="45%">進站總人數</td>
                    <td width="23%"><input type="text" name="text" value="<?=$Total->find(1)['total'];?>"></td>
                </tr>
               

        </table>
        <table style="margin-top:40px; width:70%;">

                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/<?=$do;?>.php?table=<?=$do;?>')" value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>

        </table>

    </form>
</div>