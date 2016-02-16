<h1 style="display:inline"><?php echo $stock['Name']?></h1>
<div class="dropdown pull-right" style="display:inline">
    <button class="btn btn-primary dropdown-toggle my-dropdown" type="button" data-toggle="dropdown">
        <?php echo $stock['Code'] ?>
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        {stocks}
        <li><a href="/stock/stock/{ID}">{Code}</a></li>
        {/stocks}
    </ul>
</div>
<p><?php echo $stock['Code'].': $'.$stock['Value']?></p>
<h2>Stock Movements</h2>
<div class="table">
    <table class="table table-condensed" id="movements">
        <tr>
            {movementsheaders}
            <th>{name}</th>
            {/movementsheaders}
        </tr>
        {stockmovements}
        <tr>
            <td>{Datetime}</td>
            <td>{Action}</td>
            <td>{Amount}</td>
        </tr>
        {/stockmovements}
    </table>
</div>


<h2>Stock Transactions</h2>
<div class="table">
    <table class="table table-condensed" id="transactions">
        <tr>
            {transactionsheaders}
            <th>{name}</th>
            {/transactionsheaders}
        </tr>
        {stocktransactions}
        <tr>
            <td>{DateTime}</td>
            <td>{Player}</td>
            <td>{Trans}</td>
            <td>{Quantity}</td>
        </tr>
        {/stocktransactions}
    </table>
</div>