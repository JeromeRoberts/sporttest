$Content

<strong>Find the All Blacks team from the database, and then present whether it’s regional or national, it’s colour, mascot, the season they play, and then a list of the players.</strong><br/>
<% loop $allBlacks %>
  <h2>$TeamName</h2>
  <strong>Type:</strong> $Type <br/>
  <strong>Colour:</strong> $Colour <br/>
  <strong>Mascot:</strong> $Mascot <br/>
  <strong>Season:</strong> $Season <br/>
  <H3>Player list</H3>
  <% loop $Players %>
    $Name <br/>
  <% end_loop %>
<% end_loop %>
