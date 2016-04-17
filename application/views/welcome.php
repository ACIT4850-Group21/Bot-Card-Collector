<!-- area to be populated with game status and summary info -->
<div class="left-panel">
    {gamestatus_state}
    <br/><br/>
    {gamestatus}
</div>

<!-- area to be populated with player info along with # of peanuts and equity owned -->
<div class="right-panel">
    <table>
    <div>{playerstatus_title}</div>
    <tr>
      <td>Player</td>
      <td>Peanuts</td>
      <td>Equity</td>
    </tr>
    {playerstatus}
    <tr>
        <td><a href="{playerlink}">{playername}</a></td>
        <td>{playerpeanuts}</td>
        <td>{playerequity}</td>
    </tr>
    {/playerstatus}
    </table>
</div>
