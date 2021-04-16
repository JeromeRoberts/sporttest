$Content

<strong>Find the All Blacks team from the database, and then present whether it’s regional or national, it’s colour, mascot, the season they play, and then a list of the players.</strong><br/>
<% loop $allBlacks %>
  <h2>Team: $TeamName</h2>
  <strong>Type:</strong> $Type <br/>
  <strong>Colour:</strong> $Colour <br/>
  <strong>Mascot:</strong> $Mascot <br/>
  <strong>Season:</strong> $Season <br/>
  <H3>Player list</H3>
  <ul>
    <% loop $Players %>
      <li>$Name</li>
    <% end_loop %>
  </ul>
<% end_loop %>

<strong>Find Jeff Wilson and show the teams he plays in, along with the season that the teams play and if the team is national or regional.</strong>
<% loop $getJeff %>
  <h2>Player: $Name</h2>
  <h3>Teams:</h3>
  <ul>
  <% loop $Teams %>
    <li>$Name</li>
    <ul>
      <li><strong>Season</strong>: $Season</li>
      <li><strong>Type</strong>: $Type</li>
    </ul>
  <% end_loop %>
  </ul>
<% end_loop %>
